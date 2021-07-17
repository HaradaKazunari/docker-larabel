const scrollStart = () => {
  gsap.to(box, { autoAlpha:1, }),
  no_scroll();
}
const box = ".home_outline";
const boxes = gsap.utils.toArray('.home_outline');
var start = "30%";
var end = "top";
const width = window.innerWidth;
if(width < 680){
  start = "12%";
  end = "-10%";
}
boxes.forEach((box, i) => {
  gsap.set(box, {
    autoAlpha:0,
    duration:1,
    overwrite: 'auto',
    });
  ScrollTrigger.create({
    trigger:box,
    toggleActions: 'play reverse play reverse',
    start: "top "+start, // ビューポートの設定
    end: "65% "+end,
    scrub: true,
//     markers: true, // 検証用のマーカーを表示
    pin: true,  //固定表示
    pinSpaceing:true,
    onEnter: ()=> gsap.to(box, { autoAlpha:1, }),
    onLeave: ()=> gsap.to(box, { autoAlpha:0, }),
    onEnterBack: ()=> gsap.to(box, { autoAlpha:1, }),
    onLeaveBack: ()=> gsap.to(box, { autoAlpha:0, }),
    });
});
