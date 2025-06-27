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

let scrollToPost = () => {
    let postContent = document.querySelector('.post-content');

    // smooth scroll to post content
    if (postContent) {
        postContent.scrollIntoView({
            behavior: 'smooth',
            block: 'start',
            inline: 'nearest'
        });
    } else {
        console.error('Post content element not found');
    }
};

let handleNavClick = (event) => {
    let nav_main = document.getElementById('nav_main');

    nav_main.classList.toggle('open');
    event.preventDefault();
    event.stopPropagation();
};

let createRandomDust = () => {
    // Add some random dust particles

    const dust = document.querySelector('.dust');
    const randomX = Math.random() * 100;
    const randomY = Math.random() * 100;
    const size = Math.random() * 2 + 1;

    const particle = document.createElement('div');
    particle.style.position = 'absolute';
    particle.style.left = randomX + '%';
    particle.style.top = randomY + '%';
    particle.style.width = size + 'px';
    particle.style.height = size + 'px';
    particle.style.background = 'rgba(255,255,255,0.6)';
    particle.style.borderRadius = '50%';
    particle.style.animation = 'dust 12s linear infinite';

    dust.appendChild(particle);

    // Remove particle after animation
    setTimeout(() => {
        if (particle.parentNode) {
            particle.parentNode.removeChild(particle);
        }
    }, 12000);

    // Create random dust particles periodically
    setInterval(createRandomDust, 2000);
};

let handleGallery = () => {
    const gallery = document.querySelectorAll('.wp-block-gallery');
    console.log(gallery);
    if (gallery) {
        
        let galleries = [];
        
        // for each gallery that exist, interate through
        gallery.forEach((gallery, index) => {
            // init gallery obj
            galleries.push({
                obj: gallery,
                position: 0,
                images: []
            });

            // find each galleries image
            galleries[index].images = gallery.querySelectorAll('.wp-block-image img');

            // hide all the images except the selected one
            showImage(galleries[index], galleries[index].position);


            let galleryControls = document.createElement('div');
            galleryControls.classList.add('gallery-controls');
            galleryControls.innerHTML = `
                <button class="prev"><img src="/wp-content/themes/still-stayer/svg/chevron_left.svg"/></button>
                <button class="next"><img src="/wp-content/themes/still-stayer/svg/chevron_right.svg"/></button>
            `;  
            galleries[index].obj.appendChild(galleryControls);

            // add event listeners to the gallery controls
            galleryControls.querySelector('.prev').addEventListener('click', () => {
                galleries[index].position--;
                if (galleries[index].position < 0) {
                    galleries[index].position = galleries[index].images.length - 1;
                }
                showImage(galleries[index], galleries[index].position);
            });

            galleryControls.querySelector('.next').addEventListener('click', () => {
                galleries[index].position++;
                if (galleries[index].position >= galleries[index].images.length) {
                    galleries[index].position = 0;
                }
                showImage(galleries[index], galleries[index].position);
            }); 

            galleryControls.onclick = (event) => {
                if (event.target.tagName === 'BUTTON') {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    galleries[index].obj.classList.toggle('fullscreen');
                }
            }       

        });
    }
};

let showImage = (gallery, position) => {
    gallery.images.forEach((img, imgIndex) => {
        if (imgIndex === position) {
            img.style.display = 'block';
        } else {
            img.style.display = 'none';
        }
    });
};

// let handleGalleryFullscreen = () => {
//     const galleryImg = document.querySelectorAll('.wp-block-gallery img');

//     if (galleryImg) {
//         galleryImg.forEach((img) => {
//             img.addEventListener('click', () => {
//                 // toggle fullscreen class on the parent gallery
//                 img.closest('.wp-block-gallery').classList.toggle('fullscreen');
//             });
//         });
//     }
// };

let handleNavState = () => {
    const nav_main = document.getElementById('nav_main');

    if (nav_main) {
        let navLinks = nav_main.querySelectorAll('a');
        let pathname = window.location.pathname;
        navLinks.forEach((link) => {
            if (link.href.includes(pathname)) {
                console.log('Active link:', link.href);
                link.classList.add('active-page');
            }
        });

    } else {
        console.error('Navigation elements not found');
    }
};

document.addEventListener('DOMContentLoaded', () => {
    // createRandomDust();
    // handleGallery();
    // handleGalleryFullscreen();

    handleNavState();
});