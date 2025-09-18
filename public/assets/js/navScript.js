document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(CustomEase);
    CustomEase.create(
        "hop",
        "M0,0 C0.25,0.1 0.25,1 1,1"
    );

    const menuToggle = document.querySelector(".cs-menu-toggle");
    const menu = document.querySelector(".cs-menu");
    const links = document.querySelectorAll(".cs-link");
    const socialLinks = document.querySelectorAll(".cs-socials p")

    // Iniciando la animación en false
    let isAnimating = false;

    const splitTextIntoSpans = (selector) =>{
        let elements = document.querySelectorAll(selector);
        elements.forEach((element) => {
            let text = element.innerText;
            let splitText = text
                .split("")
                .map(function (char){
                    return `<span>${char === " " ? "&nbsp;&nbsp;" : char}</span>`;
                })
                .join("");
            element.innerHTML = splitText;
        });
    };

    splitTextIntoSpans(".cs-header h1");

    menuToggle.addEventListener("click", () => {
        if(isAnimating) return;

        if(menuToggle.classList.contains("closed")) {
            menuToggle.classList.remove("closed");
            menuToggle.classList.add("opened");

            isAnimating = true;

            gsap.to(menu, {
                clipPath: "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)",
                ease: "hop",
                duration: 1.5,
                onStart: () => {
                    menu.style.pointerEvents = "all";
                },
                onComplete: () =>{
                    isAnimating = false;
                }
            });

            gsap.to(links, {
                y: 0,
                opacity: 1,
                stagger: 0.1,
                delay: 0.85,
                duration: 1,
                ease: "power3.out",
            });

            gsap.to(socialLinks, {
                y: 0,
                opacity: 1,
                stagger: 0.05,
                delay: 0.85,
                duration: 1,
                ease: "power3.out",
            });

            gsap.to(".cs-video-wrapper", {
                clipPath: "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)",
                ease: "hop",
                duration: 1.5,
                delay: 0.5,
            });

            gsap.to(".cs-header h1 span", {
                rotateY: 0,
                stagger: 0.05,
                delay: 0.75,
                duration: 1.5,
                ease: "power4.out"
            });

            gsap.to(".cs-header h1 span", {
                y: 0,
                scale: 1,
                stagger: 0.05,
                delay: 0.5,
                duration: 1.5,
                ease: "power4.out",
            })
        } else{
            menuToggle.classList.remove("opened");
            menuToggle.classList.add("closed");

            isAnimating = true;

            gsap.to(menu, {
                clipPath: "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)",
                ease: "hop",
                duration: 1.5,
                onComplete: () => {
                    menu.style.pointerEvents = "none";
                    gsap.set(menu, {
                        clipPath: "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)",
                    });

                    gsap.set(links, { y: 30, opacity: 0 });
                    gsap.set(socialLinks, { y: 30, opacity: 0 });
                    gsap.set(".cs-video-wrapper", {
                        clipPath: "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)",
                    });
                    gsap.set(".cs-header h1 span", {
                        y: 500,
                        rotateY: 90,
                        scale: 0.75,
                    });

                    isAnimating = false;
                }
            })
        }
    });
});