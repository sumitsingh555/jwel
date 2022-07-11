var VanillaTilt = (function () {
    'use strict';

    var classCallCheck = function (instance, Constructor) {
        if (!(instance instanceof Constructor)) {
            throw new TypeError("Cannot call a class as a function");
        }
    };

    if (window.innerWidth > 991) {

        var VanillaTilt = function () {
            function VanillaTilt(element) {
                var settings = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
                classCallCheck(this, VanillaTilt);

                if (!(element instanceof Node)) {
                    throw "Can't initialize VanillaTilt because " + element + " is not a Node.";
                }

                this.width = null;
                this.height = null;
                this.clientWidth = null;
                this.clientHeight = null;
                this.left = null;
                this.top = null;
                this.gammazero = null;
                this.betazero = null;
                this.lastgammazero = null;
                this.lastbetazero = null;

                this.transitionTimeout = null;
                this.updateCall = null;
                this.event = null;

                this.updateBind = this.update.bind(this);
                this.resetBind = this.reset.bind(this);

                this.element = element;
                this.settings = this.extendSettings(settings);

                this.reverse = this.settings.reverse ? -1 : 1;
                this.glare = VanillaTilt.isSettingTrue(this.settings.glare);
                this.glarePrerender = VanillaTilt.isSettingTrue(this.settings["glare-prerender"]);
                this.fullPageListening = VanillaTilt.isSettingTrue(this.settings["full-page-listening"]);
                this.gyroscope = VanillaTilt.isSettingTrue(this.settings.gyroscope);
                this.gyroscopeSamples = this.settings.gyroscopeSamples;

                this.elementListener = this.getElementListener();

                if (this.glare) {
                    this.prepareGlare();
                }

                if (this.fullPageListening) {
                    this.updateClientSize();
                }

                this.addEventListeners();
                this.updateInitialPosition();
            }

            VanillaTilt.isSettingTrue = function isSettingTrue(setting) {
                return setting === "" || setting === true || setting === 1;
            };



            VanillaTilt.prototype.getElementListener = function getElementListener() {
                if (this.fullPageListening) {
                    return window.document;
                }

                if (typeof this.settings["mouse-event-element"] === "string") {
                    var mouseEventElement = document.querySelector(this.settings["mouse-event-element"]);

                    if (mouseEventElement) {
                        return mouseEventElement;
                    }
                }

                if (this.settings["mouse-event-element"] instanceof Node) {
                    return this.settings["mouse-event-element"];
                }

                return this.element;
            };


            VanillaTilt.prototype.addEventListeners = function addEventListeners() {
                this.onMouseEnterBind = this.onMouseEnter.bind(this);
                this.onMouseMoveBind = this.onMouseMove.bind(this);
                this.onMouseLeaveBind = this.onMouseLeave.bind(this);
                this.onWindowResizeBind = this.onWindowResize.bind(this);
                this.onDeviceOrientationBind = this.onDeviceOrientation.bind(this);

                this.elementListener.addEventListener("mouseenter", this.onMouseEnterBind);
                this.elementListener.addEventListener("mouseleave", this.onMouseLeaveBind);
                this.elementListener.addEventListener("mousemove", this.onMouseMoveBind);

                if (this.glare || this.fullPageListening) {
                    window.addEventListener("resize", this.onWindowResizeBind);
                }

                if (this.gyroscope) {
                    window.addEventListener("deviceorientation", this.onDeviceOrientationBind);
                }
            };


            VanillaTilt.prototype.removeEventListeners = function removeEventListeners() {
                this.elementListener.removeEventListener("mouseenter", this.onMouseEnterBind);
                this.elementListener.removeEventListener("mouseleave", this.onMouseLeaveBind);
                this.elementListener.removeEventListener("mousemove", this.onMouseMoveBind);

                if (this.gyroscope) {
                    window.removeEventListener("deviceorientation", this.onDeviceOrientationBind);
                }

                if (this.glare || this.fullPageListening) {
                    window.removeEventListener("resize", this.onWindowResizeBind);
                }
            };

            VanillaTilt.prototype.destroy = function destroy() {
                clearTimeout(this.transitionTimeout);
                if (this.updateCall !== null) {
                    cancelAnimationFrame(this.updateCall);
                }

                this.reset();

                this.removeEventListeners();
                this.element.vanillaTilt = null;
                delete this.element.vanillaTilt;

                this.element = null;
            };

            VanillaTilt.prototype.onDeviceOrientation = function onDeviceOrientation(event) {
                if (event.gamma === null || event.beta === null) {
                    return;
                }

                this.updateElementPosition();

                if (this.gyroscopeSamples > 0) {
                    this.lastgammazero = this.gammazero;
                    this.lastbetazero = this.betazero;

                    if (this.gammazero === null) {
                        this.gammazero = event.gamma;
                        this.betazero = event.beta;
                    } else {
                        this.gammazero = (event.gamma + this.lastgammazero) / 2;
                        this.betazero = (event.beta + this.lastbetazero) / 2;
                    }

                    this.gyroscopeSamples -= 1;
                }

                var totalAngleX = this.settings.gyroscopeMaxAngleX - this.settings.gyroscopeMinAngleX;
                var totalAngleY = this.settings.gyroscopeMaxAngleY - this.settings.gyroscopeMinAngleY;

                var degreesPerPixelX = totalAngleX / this.width;
                var degreesPerPixelY = totalAngleY / this.height;

                var angleX = event.gamma - (this.settings.gyroscopeMinAngleX + this.gammazero);
                var angleY = event.beta - (this.settings.gyroscopeMinAngleY + this.betazero);

                var posX = angleX / degreesPerPixelX;
                var posY = angleY / degreesPerPixelY;

                if (this.updateCall !== null) {
                    cancelAnimationFrame(this.updateCall);
                }

                this.event = {
                    clientX: posX + this.left,
                    clientY: posY + this.top
                };

                this.updateCall = requestAnimationFrame(this.updateBind);
            };

            VanillaTilt.prototype.onMouseEnter = function onMouseEnter() {
                this.updateElementPosition();
                this.element.style.willChange = "transform";
                this.setTransition();
            };

            VanillaTilt.prototype.onMouseMove = function onMouseMove(event) {
                if (this.updateCall !== null) {
                    cancelAnimationFrame(this.updateCall);
                }

                this.event = event;
                this.updateCall = requestAnimationFrame(this.updateBind);
            };

            VanillaTilt.prototype.onMouseLeave = function onMouseLeave() {
                this.setTransition();

                if (this.settings.reset) {
                    requestAnimationFrame(this.resetBind);
                }
            };

            VanillaTilt.prototype.reset = function reset() {
                this.event = {
                    clientX: this.left + this.width / 2,
                    clientY: this.top + this.height / 2
                };

                if (this.element && this.element.style) {
                    this.element.style.transform = "perspective(" + this.settings.perspective + "px) " + "rotateX(0deg) " + "rotateY(0deg) " + "scale3d(1, 1, 1)";
                }

                this.resetGlare();
            };

            VanillaTilt.prototype.resetGlare = function resetGlare() {
                if (this.glare) {
                    this.glareElement.style.transform = "rotate(180deg) translate(-50%, -50%)";
                    this.glareElement.style.opacity = "0";
                }
            };

            VanillaTilt.prototype.updateInitialPosition = function updateInitialPosition() {
                if (this.settings.startX === 0 && this.settings.startY === 0) {
                    return;
                }

                this.onMouseEnter();

                if (this.fullPageListening) {
                    this.event = {
                        clientX: (this.settings.startX + this.settings.max) / (2 * this.settings.max) * this.clientWidth,
                        clientY: (this.settings.startY + this.settings.max) / (2 * this.settings.max) * this.clientHeight
                    };
                } else {
                    this.event = {
                        clientX: this.left + (this.settings.startX + this.settings.max) / (2 * this.settings.max) * this.width,
                        clientY: this.top + (this.settings.startY + this.settings.max) / (2 * this.settings.max) * this.height
                    };
                }

                var backupScale = this.settings.scale;
                this.settings.scale = 1;
                this.update();
                this.settings.scale = backupScale;
                this.resetGlare();
            };

            VanillaTilt.prototype.getValues = function getValues() {
                var x = void 0,
                    y = void 0;

                if (this.fullPageListening) {
                    x = this.event.clientX / this.clientWidth;
                    y = this.event.clientY / this.clientHeight;
                } else {
                    x = (this.event.clientX - this.left) / this.width;
                    y = (this.event.clientY - this.top) / this.height;
                }

                x = Math.min(Math.max(x, 0), 1);
                y = Math.min(Math.max(y, 0), 1);

                var tiltX = (this.reverse * (this.settings.max - x * this.settings.max * 2)).toFixed(2);
                var tiltY = (this.reverse * (y * this.settings.max * 2 - this.settings.max)).toFixed(2);
                var angle = Math.atan2(this.event.clientX - (this.left + this.width / 2), -(this.event.clientY - (this.top + this.height / 2))) * (180 / Math.PI);

                return {
                    tiltX: tiltX,
                    tiltY: tiltY,
                    percentageX: x * 100,
                    percentageY: y * 100,
                    angle: angle
                };
            };

            VanillaTilt.prototype.updateElementPosition = function updateElementPosition() {
                var rect = this.element.getBoundingClientRect();

                this.width = this.element.offsetWidth;
                this.height = this.element.offsetHeight;
                this.left = rect.left;
                this.top = rect.top;
            };

            VanillaTilt.prototype.update = function update() {
                var values = this.getValues();

                this.element.style.transform = "perspective(" + this.settings.perspective + "px) " + "rotateX(" + (this.settings.axis === "x" ? 0 : values.tiltY) + "deg) " + "rotateY(" + (this.settings.axis === "y" ? 0 : values.tiltX) + "deg) " + "scale3d(" + this.settings.scale + ", " + this.settings.scale + ", " + this.settings.scale + ")";

                if (this.glare) {
                    this.glareElement.style.transform = "rotate(" + values.angle + "deg) translate(-50%, -50%)";
                    this.glareElement.style.opacity = "" + values.percentageY * this.settings["max-glare"] / 100;
                }

                this.element.dispatchEvent(new CustomEvent("tiltChange", {
                    "detail": values
                }));

                this.updateCall = null;
            };


            VanillaTilt.prototype.prepareGlare = function prepareGlare() {
                if (!this.glarePrerender) {
                    var jsTiltGlare = document.createElement("div");
                    jsTiltGlare.classList.add("js-tilt-glare");

                    var jsTiltGlareInner = document.createElement("div");
                    jsTiltGlareInner.classList.add("js-tilt-glare-inner");

                    jsTiltGlare.appendChild(jsTiltGlareInner);
                    this.element.appendChild(jsTiltGlare);
                }

                this.glareElementWrapper = this.element.querySelector(".js-tilt-glare");
                this.glareElement = this.element.querySelector(".js-tilt-glare-inner");

                if (this.glarePrerender) {
                    return;
                }

                Object.assign(this.glareElementWrapper.style, {
                    "position": "absolute",
                    "top": "0",
                    "left": "0",
                    "width": "100%",
                    "height": "100%",
                    "overflow": "hidden",
                    "pointer-events": "none"
                });

                Object.assign(this.glareElement.style, {
                    "position": "absolute",
                    "top": "50%",
                    "left": "50%",
                    "pointer-events": "none",
                    "background-image": "linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%)",
                    "width": this.element.offsetWidth * 2 + "px",
                    "height": this.element.offsetWidth * 2 + "px",
                    "transform": "rotate(180deg) translate(-50%, -50%)",
                    "transform-origin": "0% 0%",
                    "opacity": "0"
                });
            };

            VanillaTilt.prototype.updateGlareSize = function updateGlareSize() {
                if (this.glare) {
                    Object.assign(this.glareElement.style, {
                        "width": "" + this.element.offsetWidth * 2,
                        "height": "" + this.element.offsetWidth * 2
                    });
                }
            };

            VanillaTilt.prototype.updateClientSize = function updateClientSize() {
                this.clientWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

                this.clientHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
            };

            VanillaTilt.prototype.onWindowResize = function onWindowResize() {
                this.updateGlareSize();
                this.updateClientSize();
            };

            VanillaTilt.prototype.setTransition = function setTransition() {
                var _this = this;

                clearTimeout(this.transitionTimeout);
                this.element.style.transition = this.settings.speed + "ms " + this.settings.easing;
                if (this.glare) this.glareElement.style.transition = "opacity " + this.settings.speed + "ms " + this.settings.easing;

                this.transitionTimeout = setTimeout(function () {
                    _this.element.style.transition = "";
                    if (_this.glare) {
                        _this.glareElement.style.transition = "";
                    }
                }, this.settings.speed);
            };


            VanillaTilt.prototype.extendSettings = function extendSettings(settings) {
                var defaultSettings = {
                    reverse: false,
                    max: 15,
                    startX: 0,
                    startY: 0,
                    perspective: 1000,
                    easing: "cubic-bezier(.03,.98,.52,.99)",
                    scale: 1,
                    speed: 300,
                    transition: true,
                    axis: null,
                    glare: false,
                    "max-glare": 1,
                    "glare-prerender": false,
                    "full-page-listening": false,
                    "mouse-event-element": null,
                    reset: true,
                    gyroscope: true,
                    gyroscopeMinAngleX: -45,
                    gyroscopeMaxAngleX: 45,
                    gyroscopeMinAngleY: -45,
                    gyroscopeMaxAngleY: 45,
                    gyroscopeSamples: 10
                };

                var newSettings = {};
                for (var property in defaultSettings) {
                    if (property in settings) {
                        newSettings[property] = settings[property];
                    } else if (this.element.hasAttribute("data-tilt-" + property)) {
                        var attribute = this.element.getAttribute("data-tilt-" + property);
                        try {
                            newSettings[property] = JSON.parse(attribute);
                        } catch (e) {
                            newSettings[property] = attribute;
                        }
                    } else {
                        newSettings[property] = defaultSettings[property];
                    }
                }

                return newSettings;
            };

            VanillaTilt.init = function init(elements, settings) {
                if (elements instanceof Node) {
                    elements = [elements];
                }

                if (elements instanceof NodeList) {
                    elements = [].slice.call(elements);
                }

                if (!(elements instanceof Array)) {
                    return;
                }

                elements.forEach(function (element) {
                    if (!("vanillaTilt" in element)) {
                        element.vanillaTilt = new VanillaTilt(element, settings);
                    }
                });
            };

            return VanillaTilt;
        }();

        if (typeof document !== "undefined") {
            window.VanillaTilt = VanillaTilt;
            VanillaTilt.init(document.querySelectorAll("[data-tilt]"));
        }
    } else {
        var VanillaTilt = '';
    }
    return VanillaTilt;

}());