/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function viewError(id,message){
    $('#'+id).fadeIn(0);
    $('#'+id).html(message);
    $('#'+id).addClass('error'); 
}

function removeError(id){
    $('#'+id).fadeOut(0);
    $('#'+id).removeClass('error'); 
}

function cekAngka(val){
    var angka = /^[0-9]+$/;
    if (angka.test(val)==false){	  
        return false;
    }
}

function jam(){ 

                    Hari = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat","Sabtu");
                    Bulan = new Array("Januari", "Februari", "Maret", "April", "Mei","Juni", "Juli","Agustus", "September", "Oktober", "November", "Desember");
	
                    var waktu = new Date(); 
                    var jam = waktu.getHours(); 
                    var menit = waktu.getMinutes(); 
                    var detik = waktu.getSeconds(); 
                    var tahun = waktu.getFullYear();
                    var bulan = Bulan[waktu.getMonth()];
                    var tgl = waktu.getDate();
                    var hari = Hari[waktu.getDay()]; 
	
	
	
                    if (jam < 10){ jam = "0" + jam; } 
                    if (menit < 10){ menit = "0" + menit; } 
                    if (detik < 10){ detik = "0" + detik; } 
                    var jam_div = document.getElementById('jam'); 
                    jam_div.innerHTML = hari+", "+tgl+" "+bulan+" "+tahun+"  "+jam + ":" + menit + ":" + detik; setTimeout("jam()", 1000); 
                } 
                