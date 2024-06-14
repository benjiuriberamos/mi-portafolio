// require('./bootstrap');

class Auto {
    positionX = 0;
    positionY = 0;
    statusAutoX = true;
    statusAutoY = true;
    element = document.getElementById('auto');
    widthElement = this.element.offsetWidth;
    heightElement = this.element.offsetHeight;
    widthParentElement = this.element.parentNode.offsetWidth;
    heightParentElement = this.element.parentNode.offsetHeight;
    moveX = 1;
    moveY = 1;
    codeProcess;
    desplazarX = () => {
        if (this.statusAutoX) {
            this.positionX += this.moveX;
            this.element.style.left = this.positionX + 'px';
        } else {
            this.positionX -= this.moveX;
            this.element.style.left = this.positionX + 'px';
        }
    
        if ((this.widthElement + this.positionX ) >= this.widthParentElement) {
            this.statusAutoX = false;
        }
    
        if (this.positionX <= 0) {
            this.statusAutoX = true;
        }
        // console.log("se mueve al x")
    };
    desplazarY = () => {
        if (this.statusAutoY) {
            this.positionY += this.moveY;
            this.element.style.top = this.positionY + 'px';
        } else {
            this.positionY -= this.moveY;
            this.element.style.top = this.positionY + 'px';
        }
    
        if ((this.heightElement + this.positionY ) >= this.heightParentElement) {
            this.statusAutoY = false;
        }
    
        if (this.positionY <= 0) {
            this.statusAutoY = true;
        }
    };
    activar = () => {
        if (!this.codeProcess) {
            this.codeProcess = setInterval(() => {
                cajaAuto.desplazarX();
                cajaAuto.desplazarY();
            }, 20);
        }
    }
    desactivar = () => {
        clearInterval(this.codeProcess) 
        this.codeProcess = null;
    };
}

const cajaAuto = new Auto();
cajaAuto.activar();

document.querySelector("#btn-stop").addEventListener("click", (e) => {
    e.preventDefault();
    cajaAuto.desactivar();
});

document.querySelector("#btn-start").addEventListener("click", (e) => {
    e.preventDefault();
    cajaAuto.activar();
})  

    