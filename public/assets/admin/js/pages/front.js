function stm_animate_block(){jQuery(".stm_animation").each(function(){if(jQuery(this).attr("data-animate")){var t=jQuery(this),e=jQuery(this).attr("data-animate"),n=jQuery(this).attr("data-animation-duration")+"s",a=jQuery(this).attr("data-animation-delay"),i="opacity:1;-webkit-animation-delay:"+a+"s;-webkit-animation-duration:"+n+"; -moz-animation-delay:"+a+"s;-moz-animation-duration:"+n+"; animation-delay:"+a+"s;",r="opacity:1;-webkit-transition-delay: "+a+"s; -moz-transition-delay: "+a+"s; transition-delay: "+a+"s;";isAppear(jQuery(this))&&(jQuery(this).attr("style",r),jQuery.each(t,function(t,n){jQuery(this).attr("style",i),jQuery(this).addClass("animated").addClass(e)}))}})}function isAppear(t){var e=jQuery(window).scrollTop(),n=jQuery(window).height();if(jQuery(t).hasClass("stm_viewport"))var a=jQuery(t).data("viewport_position");if(void 0===a||""==a)i=2;else var i=100-a;return jQuery(t).offset().top-e<=n-n*(i/100)}!function(t){"use strict";function e(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n]);return t}function n(e){var n=0,a=0;if(!e)e=t.event;return e.pageX||e.pageY?(n=e.pageX,a=e.pageY):(e.clientX||e.clientY)&&(n=e.clientX+document.body.scrollLeft+document.documentElement.scrollLeft,a=e.clientY+document.body.scrollTop+document.documentElement.scrollTop),{x:n,y:a}}function a(t,n){this.DOM={},this.DOM.el=t,this.options=e({},this.options),e(this.options,n),this._init()}a.prototype.options={movement:{imgWrapper:{translation:{x:0,y:0,z:0},rotation:{x:-5,y:5,z:0},reverseAnimation:{duration:1200,easing:"easeOutElastic",elasticity:600}},lines:{translation:{x:10,y:10,z:[0,10]},reverseAnimation:{duration:1e3,easing:"easeOutExpo",elasticity:600}},caption:{translation:{x:20,y:20,z:0},rotation:{x:0,y:0,z:0},reverseAnimation:{duration:1500,easing:"easeOutElastic",elasticity:600}},shine:{translation:{x:50,y:50,z:0},reverseAnimation:{duration:1200,easing:"easeOutElastic",elasticity:600}}}},a.prototype._init=function(){this.DOM.animatable={},this.DOM.animatable.imgWrapper=this.DOM.el.querySelector(".tilter__figure"),this.DOM.animatable.lines=this.DOM.el.querySelector(".tilter__deco--lines"),this.DOM.animatable.caption=this.DOM.el.querySelector(".tilter__caption"),this.DOM.animatable.overlay=this.DOM.el.querySelector(".tilter__deco--overlay"),this.DOM.animatable.shine=this.DOM.el.querySelector(".tilter__deco--shine > div"),this._initEvents()},a.prototype._initEvents=function(){var t,e=this,n=jQuery;this.mouseenterFn=function(){for(var a in n(e.DOM.el).addClass("active"),t=setTimeout(function(){n(e.DOM.el).removeClass("active")},100),e.DOM.animatable)anime.remove(e.DOM.animatable[a])},this.mousemoveFn=function(t){requestAnimationFrame(function(){e._layout(t)})},this.mouseleaveFn=function(a){clearTimeout(t),n(e.DOM.el).removeClass("active"),requestAnimationFrame(function(){for(var t in e.DOM.animatable)null!=e.options.movement[t]&&anime({targets:e.DOM.animatable[t],duration:null!=e.options.movement[t].reverseAnimation?e.options.movement[t].reverseAnimation.duration||0:1,easing:null!=e.options.movement[t].reverseAnimation&&e.options.movement[t].reverseAnimation.easing||"linear",elasticity:null!=e.options.movement[t].reverseAnimation&&e.options.movement[t].reverseAnimation.elasticity||null,scaleX:1,scaleY:1,scaleZ:1,translateX:0,translateY:0,translateZ:0,rotateX:0,rotateY:0,rotateZ:0})})},this.DOM.el.addEventListener("mousemove",this.mousemoveFn),this.DOM.el.addEventListener("mouseleave",this.mouseleaveFn),this.DOM.el.addEventListener("mouseenter",this.mouseenterFn)},a.prototype._layout=function(t){var e=n(t),a=document.body.scrollLeft+document.documentElement.scrollLeft,i=document.body.scrollTop+document.documentElement.scrollTop,r=this.DOM.el.getBoundingClientRect(),o=e.x-r.left-a,s=e.y-r.top-i;for(var u in this.DOM.animatable)if(null!=this.DOM.animatable[u]&&null!=this.options.movement[u]){var l=null!=this.options.movement[u]&&this.options.movement[u].translation||{x:0,y:0,z:0},c=null!=this.options.movement[u]&&this.options.movement[u].rotation||{x:0,y:0,z:0},m=function(t){for(var e in t)null==t[e]?t[e]=[0,0]:"number"==typeof t[e]&&(t[e]=[-1*t[e],t[e]])};m(l),m(c);var f={translation:{x:(l.x[1]-l.x[0])/r.width*o+l.x[0],y:(l.y[1]-l.y[0])/r.height*s+l.y[0],z:(l.z[1]-l.z[0])/r.height*s+l.z[0]},rotation:{x:(c.x[1]-c.x[0])/r.height*s+c.x[0],y:(c.y[1]-c.y[0])/r.width*o+c.y[0],z:(c.z[1]-c.z[0])/r.width*o+c.z[0]}};this.DOM.animatable[u].style.WebkitTransform=this.DOM.animatable[u].style.transform="translateX("+f.translation.x+"px) translateY("+f.translation.y+"px) translateZ("+f.translation.z+"px) rotateX("+f.rotation.x+"deg) rotateY("+f.rotation.y+"deg) rotateZ("+f.rotation.z+"deg)"}},t.TiltFx=a}(window),function(t,e){"function"==typeof define&&define.amd?define([],e):"object"==typeof module&&module.exports?module.exports=e():t.anime=e()}(this,function(){var t,e={duration:1e3,delay:0,loop:!1,autoplay:!0,direction:"normal",easing:"easeOutElastic",elasticity:400,round:!1,begin:void 0,update:void 0,complete:void 0},n="translateX translateY translateZ rotate rotateX rotateY rotateZ scale scaleX scaleY scaleZ skewX skewY".split(" "),a={arr:function(t){return Array.isArray(t)},obj:function(t){return-1<Object.prototype.toString.call(t).indexOf("Object")},svg:function(t){return t instanceof SVGElement},dom:function(t){return t.nodeType||a.svg(t)},num:function(t){return!isNaN(parseInt(t))},str:function(t){return"string"==typeof t},fnc:function(t){return"function"==typeof t},und:function(t){return void 0===t},nul:function(t){return"null"==typeof t},hex:function(t){return/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(t)},rgb:function(t){return/^rgb/.test(t)},hsl:function(t){return/^hsl/.test(t)},col:function(t){return a.hex(t)||a.rgb(t)||a.hsl(t)}},i=function(){var t={},e={Sine:function(t){return 1-Math.cos(t*Math.PI/2)},Circ:function(t){return 1-Math.sqrt(1-t*t)},Elastic:function(t,e){if(0===t||1===t)return t;var n=1-Math.min(e,998)/1e3,a=t/1-1;return-Math.pow(2,10*a)*Math.sin(2*(a-n/(2*Math.PI)*Math.asin(1))*Math.PI/n)},Back:function(t){return t*t*(3*t-2)},Bounce:function(t){for(var e,n=4;t<((e=Math.pow(2,--n))-1)/11;);return 1/Math.pow(4,3-n)-7.5625*Math.pow((3*e-2)/22-t,2)}};return["Quad","Cubic","Quart","Quint","Expo"].forEach(function(t,n){e[t]=function(t){return Math.pow(t,n+2)}}),Object.keys(e).forEach(function(n){var a=e[n];t["easeIn"+n]=a,t["easeOut"+n]=function(t,e){return 1-a(1-t,e)},t["easeInOut"+n]=function(t,e){return.5>t?a(2*t,e)/2:1-a(-2*t+2,e)/2},t["easeOutIn"+n]=function(t,e){return.5>t?(1-a(1-2*t,e))/2:(a(2*t-1,e)+1)/2}}),t.linear=function(t){return t},t}(),r=function(t){return a.str(t)?t:t+""},o=function(t){return t.replace(/([a-z])([A-Z])/g,"$1-$2").toLowerCase()},s=function(t){if(a.col(t))return!1;try{return document.querySelectorAll(t)}catch(t){return!1}},u=function(t){return t.reduce(function(t,e){return t.concat(a.arr(e)?u(e):e)},[])},l=function(t){return a.arr(t)?t:(a.str(t)&&(t=s(t)||t),t instanceof NodeList||t instanceof HTMLCollection?[].slice.call(t):[t])},c=function(t,e){return t.some(function(t){return t===e})},m=function(t){return t.filter(function(t,e,n){return n.indexOf(t)===e})},f=function(t){var e,n={};for(e in t)n[e]=t[e];return n},d=function(t,e){for(var n in e)t[n]=a.und(t[n])?e[n]:t[n];return t},p=function(t){return/([\+\-]?[0-9|auto\.]+)(%|px|pt|em|rem|in|cm|mm|ex|pc|vw|vh|deg)?/.exec(t)[2]},h=function(t,e,n){return p(e)?e:-1<t.indexOf("translate")?p(n)?e+p(n):e+"px":-1<t.indexOf("rotate")||-1<t.indexOf("skew")?e+"deg":e},v=function(t,e){if(e in t.style)return getComputedStyle(t).getPropertyValue(o(e))||"0"},y=function(t,e){return a.dom(t)&&c(n,e)?"transform":a.dom(t)&&(t.getAttribute(e)||a.svg(t)&&t[e])?"attribute":a.dom(t)&&"transform"!==e&&v(t,e)?"css":a.nul(t[e])||a.und(t[e])?void 0:"object"},g=function(t,e){switch(y(t,e)){case"transform":return function(t,e){var n=-1<e.indexOf("scale")?1:0,a=t.style.transform;if(!a)return n;for(var i=/(\w+)\((.+?)\)/g,r=[],o=[],s=[];r=i.exec(a);)o.push(r[1]),s.push(r[2]);return(a=s.filter(function(t,n){return o[n]===e})).length?a[0]:n}(t,e);case"css":return v(t,e);case"attribute":return t.getAttribute(e)}return t[e]||0},b=function(t,e,n){return a.col(e)?e=a.rgb(e)?e:a.hex(e)?function(t){t=t.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i,function(t,e,n,a){return e+e+n+n+a+a});var e=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(t);return"rgb("+(t=parseInt(e[1],16))+","+parseInt(e[2],16)+","+(e=parseInt(e[3],16))+")"}(e):a.hsl(e)?function(t){t=/hsl\((\d+),\s*([\d.]+)%,\s*([\d.]+)%\)/g.exec(t);var e=parseInt(t[1])/360,n=parseInt(t[2])/100,a=parseInt(t[3])/100;if(t=function(t,e,n){return 0>n&&(n+=1),1<n&&--n,n<1/6?t+6*(e-t)*n:.5>n?e:n<2/3?t+(e-t)*(2/3-n)*6:t},0==n)n=a=e=a;else{var i=.5>a?a*(1+n):a+n-a*n,r=2*a-i;n=t(r,i,e+1/3),a=t(r,i,e),e=t(r,i,e-1/3)}return"rgb("+255*n+","+255*a+","+255*e+")"}(e):void 0:p(e)?e:(!(t=p(p(t.to)?t.to:t.from))&&n&&(t=p(n)),t?e+t:e)},O=function(t){var e=/-?\d*\.?\d+/g;return{original:t,numbers:r(t).match(e)?r(t).match(e).map(Number):[0],strings:r(t).split(e)}},M=function(t,e,n,a){return"transform"===n?(n=t+"("+h(t,e.from,e.to)+")",e=t+"("+h(t,e.to)+")"):(t="css"===n?v(a,t):void 0,n=b(e,e.from,t),e=b(e,e.to,t)),{from:O(n),to:O(e)}},x=function(t,e){t.tweens.forEach(function(n){var a=n.from,i=t.duration-(n.delay+n.duration);n.from=n.to,n.to=a,e&&(n.delay=i)}),t.reversed=!t.reversed},w=function(t){var e=[],n=[];return t.tweens.forEach(function(t){"css"!==t.type&&"transform"!==t.type||(e.push("css"===t.type?o(t.name):"transform"),t.animatables.forEach(function(t){n.push(t.target)}))}),{properties:m(e).join(", "),elements:m(n)}},D=function(e,n){var a;e.currentTime=n,e.progress=n/e.duration*100;for(var r=0;r<e.tweens.length;r++){var o=e.tweens[r];o.currentValue=function(t,e){var n=Math.min(Math.max(e-t.delay,0),t.duration)/t.duration;return function(t,e,n){return e.reduce(function(e,a,i){return a=a||n[i-1],e+t[i-1]+a})}(t.to.numbers.map(function(e,a){var r=t.from.numbers[a],o=i[t.easing](n,t.elasticity);r=t.path?function(t,e){var n=t.path,a=t.value*e,i=(o=function(i){return i=i||0,n.getPointAtLength(1<e?t.value+i:a+i)})(),r=o(-1),o=o(1);switch(t.name){case"translateX":return i.x;case"translateY":return i.y;case"rotate":return 180*Math.atan2(o.y-r.y,o.x-r.x)/Math.PI}}(t,o):r+o*(e-r);return t.round?Math.round(r*t.round)/t.round:r}),t.to.strings,t.from.strings)}(o,n);for(var s=o.currentValue,u=0;u<o.animatables.length;u++){var l=(c=o.animatables[u]).id,c=c.target,m=o.name;switch(o.type){case"css":c.style[m]=s;break;case"attribute":c.setAttribute(m,s);break;case"object":c[m]=s;break;case"transform":a||(a={}),a[l]||(a[l]=[]),a[l].push(s)}}}if(a)for(r in t||(t=(v(document.body,"transform")?"":"-webkit-")+"transform"),a)e.animatables[r].target.style[t]=a[r].join(" ");e.settings.update&&e.settings.update(e)},_=function(t){var n={};n.animatables=function(t){return(t=t?u(a.arr(t)?t.map(l):l(t)):[]).map(function(t,e){return{target:t,id:e}})}(t.targets),n.settings=d(t,e);var i,r=n.settings,o=[];for(i in t)if(!e.hasOwnProperty(i)&&"targets"!==i){var s=a.obj(t[i])?f(t[i]):{value:t[i]};s.name=i,o.push(d(s,r))}return n.properties=o,n.tweens=function(t,e){var n={};return t.forEach(function(t){var a=JSON.stringify(e.map(function(e){return t[e]}));n[a]=n[a]||[],n[a].push(t)}),Object.keys(n).map(function(t){return n[t]})}(function(t,e){var n=[];return t.forEach(function(i,r){var o=i.target;return e.forEach(function(e){var s=y(o,e.name);if(s){var u;u=e.name;var c=e.value;u={from:1<(c=l(a.fnc(c)?c(o,r):c)).length?c[0]:g(o,u),to:1<c.length?c[1]:c[0]},(c=f(e)).animatables=i,c.type=s,c.from=M(e.name,u,c.type,o).from,c.to=M(e.name,u,c.type,o).to,c.round=a.col(u.from)||c.round?1:0,c.delay=(a.fnc(c.delay)?c.delay(o,r,t.length):c.delay)/j.speed,c.duration=(a.fnc(c.duration)?c.duration(o,r,t.length):c.duration)/j.speed,n.push(c)}})}),n}(n.animatables,n.properties),["name","from","to","delay","duration"]).map(function(t){var e=f(t[0]);return e.animatables=t.map(function(t){return t.animatables}),e.totalDuration=e.delay+e.duration,e}),n.duration=function(t){if(t.length)return Math.max.apply(Math,t.map(function(t){return t.totalDuration}))}(n.tweens)||t.duration,n.currentTime=0,n.progress=0,n.ended=!1,n},A=[],E=0,z=function(){var t=function(){E=requestAnimationFrame(e)},e=function(e){if(A.length){for(var n=0;n<A.length;n++)A[n].tick(e);t()}else cancelAnimationFrame(E),E=0};return t}(),j=function(t){var e=_(t),n={};return e.tick=function(t){e.ended=!1,n.start||(n.start=t),n.current=Math.min(Math.max(n.last+t-n.start,0),e.duration),D(e,n.current);var i=e.settings;i.begin&&n.current>=i.delay&&(i.begin(e),i.begin=void 0),n.current>=e.duration&&(i.loop?(n.start=t,"alternate"===i.direction&&x(e,!0),a.num(i.loop)&&i.loop--):(e.ended=!0,e.pause(),i.complete&&i.complete(e)),n.last=0)},e.seek=function(t){D(e,t/100*e.duration)},e.pause=function(){w(e).elements.forEach(function(t){t.style.removeProperty("will-change")});var t=A.indexOf(e);-1<t&&A.splice(t,1)},e.play=function(t){e.pause(),t&&(e=d(_(d(t,e.settings)),e)),n.start=0,n.last=e.ended?0:e.currentTime,"reverse"===(t=e.settings).direction&&x(e),"alternate"!==t.direction||t.loop||(t.loop=1),function(t){var e=w(t);e.elements.forEach(function(t){t.style.willChange=e.properties})}(e),A.push(e),E||z()},e.restart=function(){e.reversed&&x(e),e.pause(),e.seek(0),e.play()},e.settings.autoplay&&e.play(),e};return j.version="1.1.1",j.speed=1,j.list=A,j.remove=function(t){t=u(a.arr(t)?t.map(l):l(t));for(var e=A.length-1;0<=e;e--)for(var n=A[e],i=n.tweens,r=i.length-1;0<=r;r--)for(var o=i[r].animatables,s=o.length-1;0<=s;s--)c(t,o[s].target)&&(o.splice(s,1),o.length||i.splice(r,1),i.length||n.pause())},j.easings=i,j.getValue=g,j.path=function(t){return{path:t=a.str(t)?s(t)[0]:t,value:t.getTotalLength()}},j.random=function(t,e){return Math.floor(Math.random()*(e-t+1))+t},j}),function(t){"use strict";function e(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n]);return t}function n(e){var n=0,a=0;return e||(e=t.event),e.pageX||e.pageY?(n=e.pageX,a=e.pageY):(e.clientX||e.clientY)&&(n=e.clientX+document.body.scrollLeft+document.documentElement.scrollLeft,a=e.clientY+document.body.scrollTop+document.documentElement.scrollTop),{x:n,y:a}}function a(t,n){this.DOM={},this.DOM.el=t,this.options=e({},this.options),e(this.options,n),this._init()}a.prototype.options={movement:{imgWrapper:{translation:{x:0,y:0,z:0},rotation:{x:-5,y:5,z:0},reverseAnimation:{duration:1200,easing:"easeOutElastic",elasticity:600}},lines:{translation:{x:10,y:10,z:[0,10]},reverseAnimation:{duration:1e3,easing:"easeOutExpo",elasticity:600}},caption:{translation:{x:20,y:20,z:0},rotation:{x:0,y:0,z:0},reverseAnimation:{duration:1500,easing:"easeOutElastic",elasticity:600}},shine:{translation:{x:50,y:50,z:0},reverseAnimation:{duration:1200,easing:"easeOutElastic",elasticity:600}}}},a.prototype._init=function(){this.DOM.animatable={},this.DOM.animatable.imgWrapper=this.DOM.el.querySelector(".tilter__figure"),this.DOM.animatable.lines=this.DOM.el.querySelector(".tilter__deco--lines"),this.DOM.animatable.caption=this.DOM.el.querySelector(".tilter__caption"),this.DOM.animatable.overlay=this.DOM.el.querySelector(".tilter__deco--overlay"),this.DOM.animatable.shine=this.DOM.el.querySelector(".tilter__deco--shine > div"),this._initEvents()},a.prototype._initEvents=function(){var t,e=this,n=jQuery;this.mouseenterFn=function(){for(var a in n(e.DOM.el).addClass("active"),t=setTimeout(function(){n(e.DOM.el).removeClass("active")},100),e.DOM.animatable)anime.remove(e.DOM.animatable[a])},this.mousemoveFn=function(t){requestAnimationFrame(function(){e._layout(t)})},this.mouseleaveFn=function(a){clearTimeout(t),n(e.DOM.el).removeClass("active"),requestAnimationFrame(function(){for(var t in e.DOM.animatable)null!=e.options.movement[t]&&anime({targets:e.DOM.animatable[t],duration:null!=e.options.movement[t].reverseAnimation?e.options.movement[t].reverseAnimation.duration||0:1,easing:null!=e.options.movement[t].reverseAnimation&&e.options.movement[t].reverseAnimation.easing||"linear",elasticity:null!=e.options.movement[t].reverseAnimation&&e.options.movement[t].reverseAnimation.elasticity||null,scaleX:1,scaleY:1,scaleZ:1,translateX:0,translateY:0,translateZ:0,rotateX:0,rotateY:0,rotateZ:0})})},this.DOM.el.addEventListener("mousemove",this.mousemoveFn),this.DOM.el.addEventListener("mouseleave",this.mouseleaveFn),this.DOM.el.addEventListener("mouseenter",this.mouseenterFn)},a.prototype._layout=function(t){var e=n(t),a=document.body.scrollLeft+document.documentElement.scrollLeft,i=document.body.scrollTop+document.documentElement.scrollTop,r=this.DOM.el.getBoundingClientRect(),o=e.x-r.left-a,s=e.y-r.top-i;for(var u in this.DOM.animatable)if(null!=this.DOM.animatable[u]&&null!=this.options.movement[u]){var l=null!=this.options.movement[u]&&this.options.movement[u].translation||{x:0,y:0,z:0},c=null!=this.options.movement[u]&&this.options.movement[u].rotation||{x:0,y:0,z:0},m=function(t){for(var e in t)null==t[e]?t[e]=[0,0]:"number"==typeof t[e]&&(t[e]=[-1*t[e],t[e]])};m(l),m(c);var f={translation:{x:(l.x[1]-l.x[0])/r.width*o+l.x[0],y:(l.y[1]-l.y[0])/r.height*s+l.y[0],z:(l.z[1]-l.z[0])/r.height*s+l.z[0]},rotation:{x:(c.x[1]-c.x[0])/r.height*s+c.x[0],y:(c.y[1]-c.y[0])/r.width*o+c.y[0],z:(c.z[1]-c.z[0])/r.width*o+c.z[0]}};this.DOM.animatable[u].style.WebkitTransform=this.DOM.animatable[u].style.transform="translateX("+f.translation.x+"px) translateY("+f.translation.y+"px) translateZ("+f.translation.z+"px) rotateX("+f.rotation.x+"deg) rotateY("+f.rotation.y+"deg) rotateZ("+f.rotation.z+"deg)"}},t.TiltFx=a}(window),function(t){"use strict";t(".menu_button").on("click",function(){t(this).toggleClass("active"),t(".header-banner .top-bar").each(function(){t(this).hasClass("show_header")?t(this).removeClass("show_header"):t(this).addClass("show_header")})}),t(".button").on("mouseenter",function(e){var n=t(this).offset(),a=e.pageX-n.left,i=e.pageY-n.top;t(this).find("div").css({top:i,left:a})}).on("mouseout",function(e){var n=t(this).offset(),a=e.pageX-n.left,i=e.pageY-n.top;t(this).find("div").css({top:i,left:a})}),/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)?t(".stm_animation").css("opacity",1):(stm_animate_block(),t(".tilter").each(function(){new TiltFx(this,{})})),jQuery(window).scroll(function(){/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)?t(".stm_animation").css("opacity",1):stm_animate_block(),0!==t(window).scrollTop()?t(".top-bar").addClass("top-sticky"):t(".top-bar").removeClass("top-sticky"),t(window).scrollTop()+t(window).height()==t(document).height()&&t(".arrow_top").addClass("arrowShow"),0===t(window).scrollTop()&&t(".arrow_top").removeClass("arrowShow")}),t(".parallax-bg").each(function(){var e='background-image:url("'+t(this).data("image-src")+'");';t(this).attr("style",e)})}(jQuery);