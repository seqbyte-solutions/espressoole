const handlePageMapLoaded = () => {
  const mapButtons = document.querySelectorAll(".party-map__button");

  const mapModal = document.getElementById("modal__map-info");
  const mapModalBox = document.querySelector(".modal_map-info-box");
  const mapModalClose = document.querySelector(".modal_map-info__close");
  const mapModalHeading = document.querySelector(".modal_map-info__header h2");
  const mapModalContent = document.querySelector(".modal_map-info__content");

  const modalContents = espressooleMap.modal;

  mapButtons.forEach((button) => {
    button.addEventListener("click", (event) => {
      event.preventDefault();

        const buttonId = button.id;
        const modalContent = modalContents[buttonId];

        mapModalHeading.textContent = modalContent.title;
        mapModalContent.innerHTML = modalContent.content;

      gsap.set(mapModal, {
        display: "flex",
        onComplete: () => {
          gsap.to(mapModal, {
            opacity: 1,
            duration: 0.3,
          });
        },
      });

      gsap.to(mapModalBox, {
        opacity: 1,
        y: 0,
        duration: 0.3,
      });
    });
  });

  mapModalClose.addEventListener("click", (event) => {
    event.preventDefault();
    gsap.to(mapModalBox, {
      opacity: 0,
      y: 50,
      duration: 0.3,
   
    });
    gsap.to(mapModal, {
          opacity: 0,
          duration: 0.3,
          
          onComplete: () => {
            gsap.set(mapModal, {
              display: "none",
            });

             mapModalHeading.textContent = "";
        mapModalContent.innerHTML = "";
          },
        });

    return;
  });
};

document.addEventListener("DOMContentLoaded", handlePageMapLoaded);
