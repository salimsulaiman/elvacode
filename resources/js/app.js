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


