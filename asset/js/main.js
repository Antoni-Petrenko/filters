const tl=new TimelineMax();
const controller= new ScrollMagic.Controller();


tl.from("#cup",1,{
    y:-300,
    opacity:0,
    ease: Bounce.easeOut,
})
tl.from("#water",.5,{
    opacity:0
},"-=0.1")
tl.from("[data-num='1']",.2,{
    x: -20,
    opacity:0
},"-=0.1")
tl.from("[data-num='2']",.2,{
    x: 20,
    opacity:0
},"-=0.1")
tl.from("[data-num='3']",.2,{
    x: -20,
    opacity:0
},"-=0.1")
tl.from("[data-num='4']",.2,{
    x: 20,
    opacity:0
},"-=0.1")
tl.from("[data-num='5']",.2,{
    x: -20,
    opacity:0
},"-=0.1")
tl.from("[data-num='6']",.2,{
    x: 20,
    opacity:0
},"-=0.1")
tl.from("[data-num='7']",.2,{
    x: -20,
    opacity:0
},"-=0.1")

const scene2=new ScrollMagic.Scene({
    triggerElement:".cup-section",
}).setTween(tl).addTo(controller)



const tl2=new TimelineMax();




tl2.from("[data-anim='1']",.5,{
    scale:0,
    ease:Elastic.easeOut.config(1, 0.3),
})

tl2.from("output",1.5,{
    scale:0,
    ease:Elastic.easeOut.config(1, 0.3),
})

tl2.from("[data-anim='2']",1,{
    scale:0,
    ease:Elastic.easeOut.config(1, 0.3),
},"-=0.5")

tl2.from("[data-anim='3']",1,{
    scale:0,
    ease:Elastic.easeOut.config(1, 0.3),
},"-=0.5")

const sceneSecSection=new ScrollMagic.Scene({
    triggerElement:".sec-section",
}).setTween(tl2).addTo(controller)
const checkboxes=[pump,install];
let output={score:3999};

(function(){
    result.value=`${output.score} ₴`;

})();

checkboxes.forEach(element => {
    element.addEventListener("change",e=>{
        const install=450;
        const pump=2000;
        function updateHandler(){
            result.value=`${output.score} ₴`;
            
        }
        const time=.5;
        if(e.target.id==="install"){
          e.target.checked
          ? TweenMax.to(output, time, {score:`+=450`,  onUpdate:updateHandler, roundProps:"score",  ease:Linear.easeNone})
          : TweenMax.to(output, time, {score:`-=450`,  onUpdate:updateHandler, roundProps:"score", ease:Linear.easeNone})
        }
        if(e.target.id==="pump"){
            e.target.checked
          ? TweenMax.to(output, time, {score:`+=2000`,  onUpdate:updateHandler, roundProps:"score",  ease:Linear.easeNone})
          : TweenMax.to(output, time, {score:`-=2000`,  onUpdate:updateHandler, roundProps:"score", ease:Linear.easeNone})
        }
    })
});