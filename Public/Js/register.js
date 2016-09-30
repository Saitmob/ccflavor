$(function() {
	var signBtn = document.getElementById('sign-btn');
	var oInput = document.getElementsByTagName('input');
	var usernameInput = oInput[1];
	var pwInput = oInput[2];
	var rePwInput = oInput[3];
	var err = document.getElementsByClassName('err')
	var name_msg = err[0];
	var pw_msg = err[1];
	var pw2_msg = err[2];
	var count = document.getElementsByClassName('count');
	var name_count = count[0];
	var pw_count = count[1];
	var str = '222';
	var re = /a{2}/i;
	var count = 0;
	usernameInput.onfocus = function(){
		name_msg.style.display = 'block';
		if (name_msg.innerHTML!='OK') {
			name_msg.innerHTML = '用户名应在5-20个字符之间';
		}
		
	}
	usernameInput.onkeyup = function(){
		count = getLength(this.value);
		if(count>0){
			name_count.style.visibility = 'visible';
			name_count.innerHTML = count+'个字符';
		}else{
			name_count.style.visibility = 'hidden';
		}
		
	}
	usernameInput.onblur = function(){
		//不含非法字符
		//长度不在5-20
		//ok
		var re = /[^\w\u4e00-\u9fa5]/g;
		if (re.test(this.value)) {
			name_msg.innerHTML = '非法用户名';
		}else if (getLength(this.value)>20) {
			name_msg.innerHTML = '用户名过长';
		}else if (getLength(this.value)<5) {
			name_msg.innerHTML = '用户名太短';
		}else{
			name_msg.innerHTML = 'OK';
		}


	}
	pwInput.onfocus = function(){
		pw_msg.style.display = 'block';
		if (pw_msg.innerHTML!='OK') {
			pw_msg.innerHTML = '密码应在6-16个字符之间';
		}
	}
	pwInput.onkeyup = function(){
		count = getLength(this.value);
		if(count>0){
			pw_count.style.visibility = 'visible';
			pw_count.innerHTML = count+'个字符';
		}else{
			pw_count.style.visibility = 'hidden';
		}
		
	}
	pwInput.onblur = function(){
		//不含非法字符
		//长度不在6-16
		//ok
		var re = /[^\w\u4e00-\u9fa5]/g;
		 if (getLength(this.value)>16) {
			pw_msg.innerHTML = '密码过长';
		}else if (getLength(this.value)<6) {
			pw_msg.innerHTML = '密码太短';
		}else{
			pw_msg.innerHTML = 'OK';
		}
		if( pw_msg.innerHTML != 'OK'){
			rePwInput.setAttribute('disabled','');
		}else{ 
			rePwInput.removeAttribute('disabled');
			signBtn.setAttribute('disabled','disabled');
		}
	}
	rePwInput.onfocus = function(){
		pw_msg.style.display = 'block';
		if (pw_msg.innerHTML!='OK') {
			pw_msg.innerHTML = '密码应在6-16个字符之间';
			rePwInput.setAttribute('disabled','');
		}else{ 
			rePwInput.removeAttribute('disabled');
		}
	}
	rePwInput.onblur = function(){
		pw2_msg.style.display = 'block';
		 if (this.value!=pwInput.value) {
		 	pw2_msg.innerHTML = '密码不一致';

			
			
		}
		else{
			pw2_msg.innerHTML = 'OK';
		}
		
	}
	signBtn.onsubmit = function(){
		if (pw2_msg.innerHTML != 'OK') {
			signBtn.setAttribute('disabled','');
			return false;
		}
	}
})
function getLength(str){
	return str.replace(/[^\x00-\xff]/g,'xx').length;
}