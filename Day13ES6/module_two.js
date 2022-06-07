function output(){
    //document에 write를 직접 하는 건 에러가 나네. 동시작업이라 그런 듯
    // Failed to execute 'write' on 'Document': It isn't possible to write into a document from an asynchronously-loaded external script unless it is explicitly opened.
    //document.write("module_two.js의 output()")
    const e = document.createElement("p")
    e.textContent = "module_two.js의 output()"
    document.body.appendChild(e)
}

//위 show() 함수를 다른 .js 문서에서 import 하려면 반드시 원래 문서에서 export 해줘야 함
//하나의 .js 안에서 export는 여러개 가능하지만 반드시 그 중 하나는 default로 지정해줘야 함
//마치 자바 문서 안에 여러 개의 class가 있을 수 있지만 그 중 하나는 반드시 public이어야 하고 그 class와 문서 이름이 같아야 하는 규칙과 비슷
export default output

// default는 한 개만 지정 가능
// default가 아닌 export를 할 때는 만들면서 export 해야 함
export function addHeadingElementToBody(text){
    const h = document.createElement("h3")
    h.textContent = text
    document.body.appendChild(h)
}
// export addHeadingElementToBody //error


//변수나 상수도 export
export let name = "Kim"
export const age = 20

