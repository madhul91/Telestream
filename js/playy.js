jwplayer("myElement").setup({
    title: '<?php echo $name; ?>',
    description: '<?php echo  $cidd; ?>',
    image: ' <?php echo $cid; ?>',
    aspectratio: '16:9',
    width: '100%',
    mute: false,
    autostart: false,
    file: "<?php echo url($id);?>",
    type: "mp4",
    captions: { color: '#ffb800', fontSize: 30, backgroundOpacity: 0 },
    sharing: {
        sites: ['facebook', 'twitter']
    }
}).on('error', function () {
    var videoElement = document.getElementById('myElement');
    if (videoElement) {
        videoElement.parentNode.removeChild(videoElement);
    }
});