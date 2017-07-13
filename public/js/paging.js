/*
 * paging halaman
 *
 */

//function Paging(){
	/*page = 1;
	maxPerPage = 30;
	dataPosition = 1;
	numOfPage = 0;
	url = '';
	url_data = '';
	data = null;*/
//};

/*
 * menciptakan halaman data + paging
 */
//Paging.prototype.createPaging = function(divContainerId){
function createPaging(url,url_data,page,maxPerPage,divContainerId){
	//var data = getData(url_data);console.log(data);
	data = getData(url_data); console.log(data);
	var numOfData = 0; //Object.keys(data).length;//data.length; 
	for (var p in data) {
	    if (data.hasOwnProperty(p)) {
	        numOfData++;
	    }
	}
	//console.log(numOfData);
	numOfPage = Math.ceil(numOfData/maxPerPage);
	
	$.post(url,{halaman:page,max_data:maxPerPage},
		function(data){
			$('#'+divContainerId).fadeIn();
			$('#'+divContainerId).html(data);
		}
	);

	createNavigation(url,url_data,numOfPage,divContainerId);
}

/*
 * menciptakan tombol halaman
 */
//Paging.prototype.createNavigation = function(url,url_data,numOfPage,divContainerId){
function createNavigation(url,url_data,numOfPage,divContainerId){
	//TODO jika di halaman 1 : Tombol Next
	//jika di halaman terakhir : tombol Prev
	//jika selain itu : tombol first, prev, next, last
	var idNextOne = "nextOne";
	var idPrevOne = "prevOne";
	var idPrev = "prev";
	var idNext = "next";
	var idFirst = "first";
	var idLast = "last";

	var nextOne,prev,next,first,last,prevOne;
	var divNav = document.createElement('div');
	divNav.className = ""; //kelas nav\
	if(isExistDomId(idNextOne)){
		nextOne = document.getElementById(idNextOne);
	}else{
		//console.log('ASDFGHJK');
		nextOne = document.createElement('input');
		nextOne.type = "button";
		nextOne.value = "Next";
		nextOne.className = "paging";
		nextOne.setAttribute("id",idNextOne);
		//console.log(nextOne); 
	}

	if(isExistDomId(idNext)){
		next = document.getElementById(idNext);
	}else{
		//console.log('gvcgghc');
		next = document.createElement('input');
		next.type = "button";
		next.value = ">";
		next.className = "paging-kecil";
		next.setAttribute("id",idNext);
	}

	if(isExistDomId(idPrevOne)){
		prevOne = document.getElementById(idPrevOne);
	}else{
		prevOne = document.createElement('input');
		prevOne.type = "button";
		prevOne.value = "Prev";
		prevOne.className = "paging";
		prevOne.setAttribute("id",idPrevOne);
	}

	if(isExistDomId(idPrev)){
		prev = document.getElementById(idPrev);
	}else{
		prev = document.createElement('input');
		prev.type = "button";
		prev.value = "<";
		prev.className = "paging-kecil";
		prev.setAttribute("id",idPrev);
	}

	if(isExistDomId(idFirst)){
		first = document.getElementById(idFirst);
	}else{
		first = document.createElement('input');
		first.type = "button";
		first.value = "<<";
		first.className = "paging-kecil";
		first.setAttribute("id",idFirst);
	}

	if(isExistDomId(idLast)){
		last = document.getElementById(idLast);
	}else{
		last = document.createElement('input');
		last.type = "button";
		last.value = ">>";
		last.className = "paging-kecil";
		last.setAttribute("id",idLast);
	}

	if(page==1){
		//TODO cek komponen lain, jika ada, hapus dari container
		//first,prev,next,last,prevOne
		if(isExistDomId(idFirst)) document.getElementById(idFirst).remove();
		if(isExistDomId(idPrev)) document.getElementById(idPrev).remove();
		if(isExistDomId(idNext)) document.getElementById(idNext).remove();
		if(isExistDomId(idLast)) document.getElementById(idLast).remove();
		if(isExistDomId(idPrevOne)) document.getElementById(idPrevOne).remove();    
		nextOne.onclick = function(){
			page++;
			createPaging(url,url_data,page,maxPerPage,divContainerId);
		}
		divNav.appendChild(nextOne);
	}else if(page>1 && page<numOfPage){
		//TODO cek komponen lain, jika ada, hapus dari container
		//nextOne,prevOne
		if(isExistDomId(idNextOne)) document.getElementById(idNextOne).remove();
		if(isExistDomId(idPrevOne)) document.getElementById(idPrevOne).remove();  
		first.onclick = function(){
			page = 1;
			createPaging(url,url_data,page,maxPerPage,divContainerId);
		}
		prev.onclick = function(){
			page--; console.log(page);
			createPaging(url,url_data,page,maxPerPage,divContainerId);	
		}
		next.onclick = function(){
			page++; console.log(page);
			createPaging(url,url_data,page,maxPerPage,divContainerId);	
		}
		last.onclick = function(){
			page = numOfPage;
			createPaging(url,url_data,page,maxPerPage,divContainerId);	
		}
		divNav.appendChild(last);
		divNav.appendChild(next);
		divNav.appendChild(prev);
		divNav.appendChild(first);
	}else if(page==numOfPage){
		//TODO cek komponen lain, jika ada, hapus dari container
		//first,prev,next,last,nextOne
		if(isExistDomId(idFirst)) document.getElementById(idFirst).remove();
		if(isExistDomId(idPrev)) document.getElementById(idPrev).remove();
		if(isExistDomId(idNext)) document.getElementById(idNext).remove();
		if(isExistDomId(idLast)) document.getElementById(idLast).remove();
		if(isExistDomId(idNextOne)) document.getElementById(idNextOne).remove(); 
		prevOne.onclick = function(){
			page--;
			createPaging(url,url_data,page,maxPerPage,divContainerId);	
		}
		divNav.appendChild(prevOne);
	}
	//console.log(divNav);
	var container = document.getElementById('nav');
	//console.log(divContainerId); 
	//console.log(container);
	container.appendChild(divNav);
}

/*
 * mendapatkan data keseluruhan
 * return json
 */
//Paging.prototype.getData = function(url){
function getData(url){
	return $.parseJSON($.ajax({
		type:"POST",
		url:url,
		async:false,
		dataType:'json',
		success:function(data){
			data = data;
		}
	}).responseText);	
}

/*
 * cek objek ada di div nav
 */
//Paging.prototype.isExistDomId = function(id){
function isExistDomId(id){
	var tmp = false;
	//TODO cek child di parent
	if(document.getElementById(id)){
		tmp = true;
		//console.log(id);
		//console.log(tmp);
	}
	return tmp;
}