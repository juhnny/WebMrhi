// var n = 0
// while(true){
//     n++ //반복문이 무한히 돌아가는 상황
//     document.getElementById('hh').innerHTML = //동작 안함
//     //워커는 UI 변경작업 불가(요소를 만들 수 없음)

//     //값을 변경하고 싶다면 main thread 쪽으로 출력하고 싶은 값을 전달
//     postMessage(n)
// }

//반복문을 사용하면 너무 빠르니까
var n = 0
function fff(){
    n++
    postMessage(n)

    setTimeout(fff, 500)
}

fff()