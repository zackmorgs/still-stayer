let scrollToContent = () => {
    let content = document.querySelector('.content');

    // smooth scroll to content
    if (content) {
        content.scrollIntoView({
            behavior: 'smooth',
            block: 'start',
            content: 'nearest'
        });
    } else {
        console.error('Content element not found');
    }
};


