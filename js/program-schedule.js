(function(doc) {
    doc.delegateEventListener('click', '.schedule-item-abstract:not(.schedule-item-expanded), .schedule-item-abstract.schedule-item-expanded .schedule-item-action', function(e) {
        e.preventDefault();
        e.stopPropagation();
        var item = e.target.closest('.schedule-item-abstract');
        if (item) item.classList.toggle('schedule-item-expanded');
    });
    doc.delegateEventListener('click', '.schedule-item-bio:not(.schedule-item-expanded), .schedule-item-bio.schedule-item-expanded .schedule-item-action', function(e) {
        e.preventDefault();
        e.stopPropagation();
        var item = e.target.closest('.schedule-item-bio');
        if (item) item.classList.toggle('schedule-item-expanded');
    });
})(document);