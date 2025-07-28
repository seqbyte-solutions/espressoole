const handlePageContentLoaded = () => {
  gsap.registerPlugin(ScrollTrigger);

  const heroTimeline = gsap.timeline();
  heroTimeline
    .to(".hero-section__headliner-container .headliner-group g", {
      opacity: 1,
      stagger: 0.3,
      duration: 0.2,
      delay: 1,
    })
    .to(".hero-section__headliner-container", {
      opacity: 0,
      y: 50,
      duration: 0.4,
      delay: 1.5,
      onComplete: () => {
        gsap.set(".hero-section__headliner-container", { display: "none" });
        gsap.set(".hero-section__content-container", { display: "flex" });
      },
    })
    .to(".hero-section__content-container svg", {
      opacity: 1,
      y: 0,
      duration: 0.4,
    }).to(".hero-section__logo_text-group", {
      opacity: 1,
      y:0,
      scaleY:1,
      stagger: 0.25,
      duration: 0.2,
    }).to(".hero-section__logo_disc-group", {
      scaleX: 1,
      x:0,
      duration: 0.25,
    }, '>-0.2').to(".hero-section__content-container p", {
      opacity: 1,
      y: 0,
      duration: 0.4 
})
.to('.hero-cta-button', {
  opacity: 1,
  y: 0,
  duration: 0.4,
  delay: 0.1,
})
;

  gsap.from(".about-section .heading-container", {
    scrollTrigger: {
      scrub: true,
      trigger: ".about-section .heading-container",
      start: "top 80%",
      end: "bottom 70%",
    },
    opacity: 0,
    y: 50,
    duration: 0.4,
  });

  // gsap.from(".about-section__content-main p", {
  //   scrollTrigger: {
  //     scrub: true,
  //     trigger: ".about-section__content-main",
  //     start: "top 80%",
  //     end: "bottom 65%",
  //   },
  //   opacity: 0,
  //   y: 50,
  //   duration: 0.4,
  //   stagger: 0.2,
  // });

  gsap.from(
    ".about-section__content-secondary .about-section__content-secondary-col",
    {
      scrollTrigger: {
        scrub: true,
        trigger: ".about-section__content-secondary",
        start: "top 80%",
        end: "bottom 80%",
      },
      opacity: 0,
      y: 50,
      duration: 0.4,
      stagger: 0.2,
    }
  );

  gsap.from(".artists-section__content .heading-container", {
    scrollTrigger: {
      scrub: true,
      trigger: ".artists-section__content .heading-container",
      start: "top 70%",
      end: "bottom 65%",
    },
    opacity: 0,
    y: 50,
    duration: 0.4,
  });

  gsap.from(".artists-section__artist-item", {
    scrollTrigger: {
      scrub: true,
      trigger: ".artists-section__artists-list",
      start: "top 70%",
      end: "bottom 65%",
    },
    opacity: 0,
    y: 50,
    stagger: 0.2,
    duration: 0.3,
  });

  gsap.from(".tickets-section__content .heading-container", {
    scrollTrigger: {
      scrub: true,
      trigger: ".tickets-section__content .heading-container",
      start: "top 70%",
      end: "bottom 60%",
    },
    opacity: 0,
    y: 50,
    duration: 0.4,
  });

  gsap.from(".tickets-section__ticket-item", {
    scrollTrigger: {
      scrub: true,
      trigger: ".tickets-section__tickets-list",
      start: "top 70%",
      end: "bottom 65%",
    },
    opacity: 0,
    y: 50,
    stagger: 0.2,
    duration: 0.3,
  });

  gsap.from(".partners-section__content .heading-container", {
    scrollTrigger: {
      scrub: true,
      trigger: ".partners-section__content .heading-container",
      start: "top 70%",
      end: "bottom 60%",
    },
    opacity: 0,
    y: 50,
    duration: 0.4,
  });

  gsap.from(".partners-section__partner-item", {
    scrollTrigger: {
      scrub: true,
      trigger: ".partners-section__partners-list",
      start: "top 70%",
      end: "bottom 80%",
    },
    opacity: 0,
    y: 50,
    stagger: 0.2,
    duration: 0.3,
  });
};

document.addEventListener("DOMContentLoaded", handlePageContentLoaded);
