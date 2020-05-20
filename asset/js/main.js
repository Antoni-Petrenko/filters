const controller = new ScrollMagic.Controller();

// cup section animation
const tl = new TimelineMax();

const scene2 = new ScrollMagic.Scene({
  triggerElement: ".cup-section",
})
  .setTween(tl)
  .addTo(controller);

tl.from("#cup", 1, {
  y: -300,
  opacity: 0,
  ease: Bounce.easeOut,
});
tl.from(
  "#water",
  0.5,
  {
    opacity: 0,
  },
  "-=0.1"
);
tl.from(
  "[data-num='1']",
  0.2,
  {
    x: -20,
    opacity: 0,
  },
  "-=0.1"
);
tl.from(
  "[data-num='2']",
  0.2,
  {
    x: 20,
    opacity: 0,
  },
  "-=0.1"
);
tl.from(
  "[data-num='3']",
  0.2,
  {
    x: -20,
    opacity: 0,
  },
  "-=0.1"
);
tl.from(
  "[data-num='4']",
  0.2,
  {
    x: 20,
    opacity: 0,
  },
  "-=0.1"
);
tl.from(
  "[data-num='5']",
  0.2,
  {
    x: -20,
    opacity: 0,
  },
  "-=0.1"
);
tl.from(
  "[data-num='6']",
  0.2,
  {
    x: 20,
    opacity: 0,
  },
  "-=0.1"
);
tl.from(
  "[data-num='7']",
  0.2,
  {
    x: -20,
    opacity: 0,
  },
  "-=0.1"
);

const tl2 = new TimelineMax();

tl2.from("[data-anim='1']", 0.5, {
  scale: 0,
  ease: Elastic.easeOut.config(1, 0.3),
});

tl2.from("output", 1.5, {
  scale: 0,
  ease: Elastic.easeOut.config(1, 0.3),
});

tl2.from(
  "[data-anim='2']",
  1,
  {
    scale: 0,
    ease: Elastic.easeOut.config(1, 0.3),
  },
  "-=0.5"
);

tl2.from(
  "[data-anim='3']",
  1,
  {
    scale: 0,
    ease: Elastic.easeOut.config(1, 0.3),
  },
  "-=0.5"
);

const sceneSecSection = new ScrollMagic.Scene({
  triggerElement: ".sec-section",
})
  .setTween(tl2)
  .addTo(controller);
const checkboxes = [pump, install];
let output = { score: 3999 };

(function () {
  result.value = `${output.score} ₴`;
})();

checkboxes.forEach((element) => {
  element.addEventListener("change", (e) => {
    const install = 450;
    const pump = 2000;
    function updateHandler() {
      result.value = `${output.score} ₴`;
    }
    const time = 0.5;
    if (e.target.id === "install") {
      e.target.checked
        ? TweenMax.to(output, time, {
            score: `+=450`,
            onUpdate: updateHandler,
            roundProps: "score",
            ease: Linear.easeNone,
          })
        : TweenMax.to(output, time, {
            score: `-=450`,
            onUpdate: updateHandler,
            roundProps: "score",
            ease: Linear.easeNone,
          });
    }
    if (e.target.id === "pump") {
      e.target.checked
        ? TweenMax.to(output, time, {
            score: `+=2000`,
            onUpdate: updateHandler,
            roundProps: "score",
            ease: Linear.easeNone,
          })
        : TweenMax.to(output, time, {
            score: `-=2000`,
            onUpdate: updateHandler,
            roundProps: "score",
            ease: Linear.easeNone,
          });
    }
  });
});

const tl3 = new TimelineMax();
const scene3 = new ScrollMagic.Scene({
  triggerElement: ".third-section",
})
  .setTween(tl3)
  .addTo(controller);

tl3.from("[data-animation-name='img-1']", 0.5, {
  scale: 0,
  ease: Elastic.easeOut.config(1, 0.3),
});
tl3.from(
  "[data-animation-name='img-2']",
  0.5,
  {
    scale: 0,
    ease: Elastic.easeOut.config(1, 0.3),
  },
  "-=0.1"
);
tl3.from(
  "[data-animation-name='img-3']",
  0.5,
  {
    scale: 0,
    ease: Elastic.easeOut.config(1, 0.3),
  },
  "-=0.1"
);

const tl4 = new TimelineMax();
const scene4 = new ScrollMagic.Scene({
  triggerElement: ".fifth-section",
})
  .setTween(tl4)
  .addTo(controller);

tl4.from(".fifth-section figure:nth-of-type(1)", .5, {
    y: '100%',
    opacity:0, 
    ease: Power4.easeOut,
});

tl4.from(".fifth-section figure:nth-of-type(2)",.5, {
    y: '100%',
    opacity:0, 
    ease: Power4.easeOut,
},'-=0.1');

tl4.from(".fifth-section figure:nth-of-type(3)", .5, {
    y: '100%',
    opacity:0, 
    ease: Power4.easeOut,
},'-=0.1');

tl4.from(".fifth-section figure:nth-of-type(4)", .5, {
    y: '100%',
    opacity:0, 
    ease: Power4.easeOut,
},'-=0.1');

tl4.from(".fifth-section figure:nth-of-type(5)", .5, {
    y: '100%',
    opacity:0, 
    ease: Power4.easeOut,
},'-=0.1');

tl4.from(".fifth-section figure:nth-of-type(6)",.5, {
  y: '100%',
  opacity:0, 
  ease: Power4.easeOut,
},'-=0.1');
