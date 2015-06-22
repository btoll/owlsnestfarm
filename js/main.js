Pete.ready(function () {
    var links = Pete.Element.gets('a'),
        title;

    function removeTitle() {
        // Neuter the default browser behavior.
        title = this.title;
        this.title = '';
    }

    function resetTitle() {
        // Restore the title.
        this.title = title;
    }

    links.on('mouseover', removeTitle);
    links.on('mouseout', resetTitle);

    //Pete.ux.Tooltip.init();
});

