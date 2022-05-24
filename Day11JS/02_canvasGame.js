








//키보드의 방향키는 onkeydown으로
function keydown(){
    var keycode = window.event.keycode
    switch(keycode){
        case 37: //Left
            dx = -1
        break
        case 38: //UP
            dy = -1
        break
        case 39: //RIGHT
            dx = 1
        break
        case 40: //DOWN
            dy = 1
        break

        default:
            dx = 1
            dy = 1
    }
}

function keyup(){
    var keycode = window.event.keyCode()
    if(keycode >= 37 && keycode <= 40){
        dx = 0
        dy = 0
    }
}