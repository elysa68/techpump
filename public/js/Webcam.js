Webcam = {
    init: function() {
        Webcam.Events.assignEvents();
    },
    Events: {
        assignEvents: function () {
            $('.popup-iframe').on('click', function (e) {
                e.preventDefault();
                let src = this.getAttribute("href")
                $.modal('<iframe src="' + src + '" height="450" width="830" style="border:0">', {
                    closeHTML:"",
                    containerCss:{
                        backgroundColor:"#fff",
                        borderColor:"#fff",
                        height:450,
                        padding:0,
                        width:830
                    },
                    overlayClose:true
                });
            });
        }
    },
}
$(document).ready(function() {
    Webcam.init();
});