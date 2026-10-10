import './bootstrap';

import feather from "feather-icons";
import { gsap } from "gsap";
import { TextPlugin } from 'gsap/all';
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { SplitText } from 'gsap/all';

document.addEventListener("DOMContentLoaded", () => {
    feather.replace();
});

gsap.registerPlugin(TextPlugin, ScrollTrigger, SplitText);
ScrollTrigger.config({ ignoreMobileResize: true });

document.fonts.ready.then(() => {
    initHeroAnimation();
    initSectionReveal();
    initStatCounter();
    initLaptopParallax();
    initTypographyParallax();
    initWordReveal();
    initParallaxItems();
    initBrowserScroll();
    initSlideText();

    ScrollTrigger.refresh();
    ScrollTrigger.sort();
    ScrollTrigger.refresh();
});

window.addEventListener("load", () => ScrollTrigger.refresh());

function initHeroAnimation() {
    const hero = document.querySelector(".hero-section");
    if (!hero) return;

    const title = hero.querySelector(".hero-title.split");
    const subtitle = hero.querySelector(".hero-subtitle");

    if (title) {
        SplitText.create(title, {
            type: "words,lines",
            linesClass: "line",
            autoSplit: true,
            mask: "lines",
            onSplit: (self) => {
                gsap.from(self.lines, {
                    yPercent: 100,
                    opacity: 0,
                    duration: 1,
                    stagger: 0.1,
                    ease: "expo.out",
                });
            }
        });
    }

    if (subtitle) {
        gsap.from(subtitle, {
            opacity: 0,
            y: 20,
            duration: 0.8,
            delay: 0.35,
            ease: "power3.out",
        });
    }
}

function initSectionReveal() {
    gsap.utils.toArray(".section").forEach((section) => {
        if (section.classList.contains("hero-section")) return;

        const title = section.querySelector(".section-title");
        const subtitle = section.querySelector(".section-desc");

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                start: "top 80%",
                once: true,
            }
        });

        if (title) {
            tl.from(title, {
                opacity: 0,
                y: 30,
                duration: 0.5,
                ease: "power3.out",
            });
        }

        if (subtitle) {
            tl.from(subtitle, {
                opacity: 0,
                y: 20,
                duration: 0.7,
                ease: "power3.out",
            }, "-=0.4");
        }
    });
}

function initStatCounter(selector = ".stat-number") {
    gsap.utils.toArray(selector).forEach((el) => {
        const endValue = parseInt(el.dataset.value, 10);
        const valueEl = el.querySelector(".stat-value");

        if (!valueEl || isNaN(endValue)) return;

        const counter = { val: 0 };

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: el,
                start: "top 85%",
                once: true,
            }
        });

        tl.fromTo(
            el,
            {
                opacity: 0,
                y: 30,
                scale: 0.8,
            },
            {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 0.6,
                ease: "power3.out",
            }
        );

        tl.to(
            counter,
            {
                val: endValue,
                duration: 1.4,
                ease: "power1.out",
                snap: { val: 1 },
                onUpdate() {
                    valueEl.textContent = counter.val;
                },
            },
            "-=0.3"
        );
    });
}

function initLaptopParallax() {
    const mm = gsap.matchMedia();

    gsap.utils.toArray("[data-laptop-parallax]").forEach((root) => {
        const back = root.querySelector('[data-layer="back"]');
        const front = root.querySelector('[data-layer="front"]');

        if (!back || !front) return;

        mm.add(
            {
                motionOk: "(prefers-reduced-motion: no-preference)",
                isDesktop: "(min-width: 1024px)",
            },
            (ctx) => {
                const { motionOk, isDesktop } = ctx.conditions;

                if (!motionOk) return;

                const backRange = isDesktop ? 10 : 5;
                const frontRange = isDesktop ? 14 : 7;

                gsap.from([back, front], {
                    opacity: 0,
                    y: 40,
                    duration: 1,
                    ease: "power3.out",
                    stagger: 0.15,
                    scrollTrigger: {
                        trigger: root,
                        start: "top 85%",
                        once: true
                    },
                });

                const scrollOpts = {
                    trigger: root,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: 0.6,
                };

                gsap.fromTo(
                    back,
                    { yPercent: backRange },
                    {
                        yPercent: -backRange,
                        ease: "none",
                        scrollTrigger: scrollOpts
                    }
                );

                gsap.fromTo(
                    front,
                    { yPercent: -frontRange },
                    {
                        yPercent: frontRange,
                        ease: "none",
                        scrollTrigger: scrollOpts
                    }
                );

                if (isDesktop) {
                    const backX = gsap.quickTo(back, "x", {
                        duration: 0.8,
                        ease: "power3"
                    });

                    const backY = gsap.quickTo(back, "y", {
                        duration: 0.8,
                        ease: "power3"
                    });

                    const frontX = gsap.quickTo(front, "x", {
                        duration: 0.8,
                        ease: "power3"
                    });

                    const frontY = gsap.quickTo(front, "y", {
                        duration: 0.8,
                        ease: "power3"
                    });

                    const onMove = (e) => {
                        const r = root.getBoundingClientRect();
                        const nx = (e.clientX - r.left) / r.width - 0.5;
                        const ny = (e.clientY - r.top) / r.height - 0.5;

                        backX(nx * -16);
                        backY(ny * -16);
                        frontX(nx * 28);
                        frontY(ny * 28);
                    };

                    const onLeave = () => {
                        backX(0);
                        backY(0);
                        frontX(0);
                        frontY(0);
                    };

                    root.addEventListener("mousemove", onMove);
                    root.addEventListener("mouseleave", onLeave);

                    return () => {
                        root.removeEventListener("mousemove", onMove);
                        root.removeEventListener("mouseleave", onLeave);
                    };
                }
            }
        );
    });
}

function initTypographyParallax() {
    const sections = gsap.utils.toArray("[data-type-section]");

    if (!sections.length) return;

    const mm = gsap.matchMedia();
    const navbar = document.querySelector(".fixed.top-0.z-50");

    let refreshFrame = null;

    const resizeObserver = navbar
        ? new ResizeObserver(() => {
              cancelAnimationFrame(refreshFrame);
              refreshFrame = requestAnimationFrame(() => {
                  ScrollTrigger.refresh();
              });
          })
        : null;

    if (resizeObserver && navbar) {
        resizeObserver.observe(navbar);
    }

    sections.forEach((section) => {
        const text = section.querySelector("[data-type-text]");

        if (!text) return;

        mm.add(
            {
                motionOk: "(prefers-reduced-motion: no-preference)",
                isDesktop: "(min-width: 1024px)",
            },
            (ctx) => {
                const { motionOk, isDesktop } = ctx.conditions;

                if (!motionOk) return;

                const split = SplitText.create(text, {
                    type: "words",
                    mask: "words",
                });

                gsap.set(split.words, {
                    yPercent: 110,
                    opacity: 0,
                    filter: "blur(12px)",
                });

                const tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: section,
                        start: "top top",
                        end: () =>
                            "+=" + window.innerHeight * (isDesktop ? 1.5 : 1.2),
                        pin: true,
                        scrub: 0.5,
                        anticipatePin: 1,
                        invalidateOnRefresh: true,
                        refreshPriority: 2,
                    },
                });

                tl.to(split.words, {
                    yPercent: 0,
                    opacity: 1,
                    filter: "blur(0px)",
                    ease: "power3.out",
                    duration: 1,
                    stagger: 0.15,
                });

                return () => split.revert();
            }
        );
    });

    return () => {
        resizeObserver?.disconnect();
        cancelAnimationFrame(refreshFrame);
    };
}


function initWordReveal() {
    const mm = gsap.matchMedia();

    gsap.utils.toArray("[data-word-reveal]").forEach((el) => {
        mm.add(
            "(prefers-reduced-motion: no-preference)",
            () => {
                const split = SplitText.create(el, {
                    type: "words"
                });

                gsap.fromTo(
                    split.words,
                    { opacity: 0.15 },
                    {
                        opacity: 1,
                        ease: "none",
                        stagger: 0.1,
                        scrollTrigger: {
                            trigger: el,
                            start: "top 85%",
                            end: "bottom 55%",
                            scrub: true,
                        },
                    }
                );

                return () => split.revert();
            }
        );
    });
}

function initParallaxItems() {
    const mm = gsap.matchMedia();

    gsap.utils.toArray("[data-parallax]").forEach((el) => {
        const distance = parseFloat(el.dataset.parallax) || 24;

        mm.add(
            "(prefers-reduced-motion: no-preference)",
            () => {
                gsap.fromTo(
                    el,
                    { y: distance },
                    {
                        y: -distance,
                        ease: "none",
                        scrollTrigger: {
                            trigger: el.closest("section") || el,
                            start: "top bottom",
                            end: "bottom top",
                            scrub: 0.6,
                        },
                    }
                );
            }
        );
    });
}

function initBrowserScroll() {
    const mm = gsap.matchMedia();

    gsap.utils.toArray("[data-browser-scroll]").forEach((root) => {
        const frame = root.querySelector("[data-browser-frame]");
        const viewport = root.querySelector("[data-browser-viewport]");
        const img = root.querySelector("[data-browser-image]");

        if (!frame || !viewport || !img) return;

        if (!img.complete) {
            img.addEventListener(
                "load",
                () => ScrollTrigger.refresh(),
                { once: true }
            );
        }

        mm.add(
            {
                motionOk: "(prefers-reduced-motion: no-preference)",
                isDesktop: "(min-width: 768px)",
            },
            (ctx) => {
                const { motionOk, isDesktop } = ctx.conditions;

                if (!motionOk) return;

                const pan = { p: 0 };

                const updatePan = () => {
                    const max = Math.max(
                        0,
                        img.offsetHeight - viewport.offsetHeight
                    );

                    gsap.set(img, {
                        y: -pan.p * max
                    });
                };

                const tl = gsap.timeline({
                    onUpdate: updatePan,
                    scrollTrigger: {
                        trigger: root,
                        start: isDesktop ? "top 96px" : "top 102px",
                        end: () =>
                            "+=" +
                            window.innerHeight *
                                (isDesktop ? 1.6 : 2.2),
                        pin: true,
                        scrub: 0.6,
                        anticipatePin: 1,
                        invalidateOnRefresh: true,
                        refreshPriority: 1,
                    },
                });

                if (isDesktop) {
                    tl.fromTo(
                        frame,
                        { width: "82%" },
                        {
                            width: "100%",
                            ease: "power2.out",
                            duration: 0.3
                        }
                    );
                }

                tl.to(
                    pan,
                    {
                        p: 1,
                        ease: "none",
                        duration: isDesktop ? 0.7 : 1,
                    },
                    isDesktop ? 0.3 : 0
                );

                return () =>
                    gsap.set(img, {
                        clearProps: "transform"
                    });
            }
        );
    });
}

function initSlideText() {
    const mm = gsap.matchMedia();

    gsap.utils.toArray("[data-slide-section]").forEach((section) => {
        const rows = gsap.utils.toArray("[data-slide]", section);
        if (!rows.length) return;

        mm.add("(prefers-reduced-motion: no-preference)", () => {
            rows.forEach((row) => {
                const toRight = row.dataset.slide === "right";

                const offLeft = () => -(row.offsetWidth - window.innerWidth * 0.35);
                const offRight = () => window.innerWidth * 0.65;

                gsap.fromTo(
                    row,
                    { x: toRight ? offLeft : offRight },
                    {
                        x: toRight ? offRight : offLeft,
                        ease: "none",
                        scrollTrigger: {
                            trigger: section,
                            start: "top bottom",
                            end: "bottom top",
                            scrub: 0.8,
                            invalidateOnRefresh: true,
                        },
                    }
                );
            });

            return () => gsap.set(rows, { clearProps: "transform" });
        });
    });
}