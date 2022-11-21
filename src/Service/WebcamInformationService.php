<?php
namespace App\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class WebcamInformationService
{
    private ParameterBagInterface $params;

    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }
    public function getInformationWebcam(): array
    {
        $webcams = json_decode(file_get_contents($this->params->get('app.url_json')));
        $mainWebcamsInfo = [];
        $otherWebcamsInfo = [];
        foreach ($webcams as $key => $webcam){
            if($key > 4 ){break;}
            $mainWebcam = clone ($webcam);
            $numberThumb = sprintf("%02d", $key+1);
            $mainWebcam->thumbnailBig = 'thumb-grande-'.$numberThumb.'.jpg';
            $mainWebcamsInfo[] = json_decode(json_encode($mainWebcam), true);
        }

        foreach ($webcams as $key => $webcam){
            if($key === 0 ){ continue; }
            $otherWebcam = clone ($webcam);
            $numberThumb = sprintf("%02d", $key+1);
            $otherWebcam->thumbnail = 'thumb-'.$numberThumb.'.jpg';
            $otherWebcamsInfo[] = json_decode(json_encode($otherWebcam), true);
        }
        return array_merge($mainWebcamsInfo, $otherWebcamsInfo);
    }
}