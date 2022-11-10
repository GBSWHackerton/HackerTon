const sendit = () => {
	// Input들을 각각 변수에 대입
    const userid = document.regiform.makeid;
	const userpw = document.regiform.makepassword;
    const useremail = document.regiform.makeemail;
    
    // userid값이 비어있으면 실행.
    if(userid.value == '') {
        alert('아이디를 입력해주세요.');
        userid.focus();
        return false;
    }
    // userid값이 4자 이상 12자 이하를 벗어나면 실행.
    if(userid.value.length < 4 || userid.value.length > 12){
        alert("아이디는 4자 이상 12자 이하로 입력해주세요.");
        userid.focus();
        return false;
    }
    // userpw값이 비어있으면 실행.
    if(userpw.value == '') {
        alert('비밀번호를 입력해주세요.');
        userpw.focus();
        return false;
    }
    // userpw_ch값이 비어있으면 실행.
    // userpw값이 6자 이상 20자 이하를 벗어나면 실행.
    if(userpw.value.length < 6 || userpw.value.length > 20){
        alert("비밀번호는 6자 이상 20자 이하로 입력해주세요.");
        userpw.focus();
        return false;
    }
	// userpw값과 userpw_ch값이 다르면 실행.
    // username값이 비어있으면 실행.
    // 한글 이름 형식 정규식
    // useremail값이 비어있으면 알림창을 띄우고 input에 포커스를 맞춘 뒤 False를 리턴한다.
    if(useremail.value == '') {
        alert('이메일을 입력해주세요.');
        useremail.focus();
        return false;
    }
	// 이메일 형식 정규식
    const expEmailText = /^[A-Za-z0-9\.\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z0-9\.\-]+$/;
    // useremail값이 정규식에 부합한지 체크
    if(!expEmailText.test(useremail.value)) {
        alert('Please check the format your E-mail.');
        useremail.focus();
        return false;
    }
    // userhobby를 하나 이상 선택 시 체크할 flag 변수 지정
    return true;
}
