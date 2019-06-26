var canvas = document.querySelector('canvas');

canvas.width = window.innerWidth * 0.95;
canvas.height = window.innerHeight * 0.8;

canvas.style = "background : #DDDDDD;";

var context = canvas.getContext('2d');

function Circle(){

    this.coloursArray = [
        "rgba(255, 0, 0, 0.3)", 
        "rgba(0, 255, 0, 0.3)", 
        "rgba(0, 0, 255, 0.3)",
        "rgba(0, 255, 255, 0.3)",
        "rgba(255, 0, 255, 0.3)",
        "rgba(255, 255, 0, 0.3)",
    ]
    this.colourIndex = 2;

    this.radius = (Math.random() + 0.2) * 30;

    this.x = canvas.width/2;
    this.y = canvas.height/2;

    this.xVel = (Math.random() - 0.5) * 6;
    this.yVel = (Math.random() - 0.5) * 6;

    this.draw = function(){
        context.beginPath();
        context.arc(this.x, this.y, this.radius, 0, Math.PI*2, false);
        context.strokeStyle = "rgba(150,150,150,0.5)";
        context.stroke();
        context.fillStyle = this.coloursArray[this.colourIndex];
        context.fill();
    }

    this.update = function(){
        this.x += this.xVel;

        if(this.x + this.radius >= canvas.width || this.x - this.radius <= 0){
            this.xVel *= -1;
        }
    
        this.y += this.yVel;

        if(this.y - this.radius <= 0){
            this.yVel = Math.random();
            
        }
    
        if(this.y + this.radius >= canvas.height){
            this.yVel = (Math.random() + 1) * -4;
            this.colourIndex = Math.floor(Math.random() * this.coloursArray.length);
        }

        this.yVel += 0.05;
    }
}

var circles = []
var count = 0;

animate();
function animate(){
    context.clearRect(0, 0, canvas.width, canvas.height);
    count++;

    if(circles.length < 50 && count > 100){
        circles.push(new Circle(200, 200));
    }

    for(var i = 0; i < circles.length; i++){
        circles[i].update();
        circles[i].draw();
    }

    requestAnimationFrame(animate);
}

