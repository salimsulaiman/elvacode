import './bootstrap';

import feather from "feather-icons";
import { gsap } from "gsap";
import { TextPlugin } from 'gsap/all';
import { ScrollTrigger } from "gsap/ScrollTrigger"
import { SplitText } from 'gsap/all';

document.addEventListener("DOMContentLoaded", () => {
    feather.replace();
});

gsap.registerPlugin(TextPlugin, ScrollTrigger, SplitText);


document.fonts.ready.then(() => {
    initHeroAnimation();
    initSectionReveal();
    initStatCounter();
    initLaptopParallax();
    initTypographyParallax();
});

function initHeroAnimation() {
    const hero = document.querySelector(".hero-section");
    if (!hero) return;

    const title = hero.querySelector(".hero-title.split");
    const subtitle = hero.querySelector(".hero-subtitle");

    gsap.set(title, { opacity: 1 });

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: hero,
            start: "top 80%",
            once: true,
        }
    });

    if (title) {
        tl.add(() => {
            SplitText.create(title, {
                type: "words,lines",
                linesClass: "line",
                autoSplit: true,
                mask: "lines",
                onSplit: (self) => {
                    gsap.from(self.lines, {
                        duration: 1.0,
                        yPercent: 100,
                        opacity: 0,
                        stagger: 0.1,
                        ease: "expo.out",
                    });
                }
            });
        });
    }

    if (subtitle) {
        tl.from(subtitle, {
            opacity: 0,
            y: 20,
            duration: 0.8,
            ease: "power3.out",
        }, "-=0.3");
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

        // object khusus untuk counter
        const counter = { val: 0 };

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: el,
                start: "top 85%",
                once: true,
            }
        });

        // 🔹 POP UP dari bawah + scale
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

        // 🔹 COUNT NUMBER
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
            "-=0.3" // overlap biar terasa hidup
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

                // Animasi masuk
                gsap.from([back, front], {
                    opacity: 0,
                    y: 40,
                    duration: 1,
                    ease: "power3.out",
                    stagger: 0.15,
                    scrollTrigger: { trigger: root, start: "top 85%", once: true },
                });

                // Parallax scroll
                const scrollOpts = {
                    trigger: root,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: 0.6,
                };

                gsap.fromTo(back,
                    { yPercent: backRange },
                    { yPercent: -backRange, ease: "none", scrollTrigger: scrollOpts });

                gsap.fromTo(front,
                    { yPercent: -frontRange },
                    { yPercent: frontRange, ease: "none", scrollTrigger: scrollOpts });

                // Parallax mouse (desktop saja)
                if (isDesktop) {
                    const backX = gsap.quickTo(back, "x", { duration: 0.8, ease: "power3" });
                    const backY = gsap.quickTo(back, "y", { duration: 0.8, ease: "power3" });
                    const frontX = gsap.quickTo(front, "x", { duration: 0.8, ease: "power3" });
                    const frontY = gsap.quickTo(front, "y", { duration: 0.8, ease: "power3" });

                    const onMove = (e) => {
                        const r = root.getBoundingClientRect();
                        const nx = (e.clientX - r.left) / r.width - 0.5;
                        const ny = (e.clientY - r.top) / r.height - 0.5;

                        backX(nx * -16);  backY(ny * -16);
                        frontX(nx * 28);  frontY(ny * 28);
                    };
                    const onLeave = () => {
                        backX(0); backY(0); frontX(0); frontY(0);
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

    sections.forEach((section) => {
        const block = section.querySelector("[data-type-block]");
        const text = section.querySelector("[data-type-text]");
        if (!block || !text) return;

        mm.add("(prefers-reduced-motion: no-preference)", () => {
            const split = SplitText.create(text, { type: "words" });

            gsap.fromTo(
                split.words,
                { opacity: 0.15 },
                {
                    opacity: 1,
                    ease: "none",
                    stagger: 0.1,
                    scrollTrigger: {
                        trigger: text,
                        start: "top 80%",
                        end: "bottom 50%",
                        scrub: true,
                    },
                }
            );

            gsap.fromTo(
                block,
                { y: 60 },
                {
                    y: -60,
                    ease: "none",
                    scrollTrigger: {
                        trigger: section,
                        start: "top bottom",
                        end: "bottom top",
                        scrub: 0.8,
                    },
                }
            );

            return () => split.revert();
        });
    });
}


