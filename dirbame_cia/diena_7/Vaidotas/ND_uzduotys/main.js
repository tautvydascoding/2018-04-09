console.log( "labas as cia" );
//pasikartoti IF

//sukurti js zaidima, popierius , akmuo, zirkles :
//https://www.codecademy.com/courses/javascript-beginner-en-Bthev-mskY8/0/1
//Zaidimas sukurtas

// pasikartoti antradieni
// parasyti f-ja "getPelnas(pajamos, mokesciai, mokesciai2)", kuri apskaiciuoja pelna is  paduotu pajamu atimdama paduotus mokescius, ir poto vel atimdama mokescius2
// pajamos 1500, mokesciai 2.5%, mokesciai2  1.5%



function getPelnas(pajamos, mokesciai, mokesciai2){
var pelnas =  (pajamos - (pajamos * mokesciai)) - (pajamos - (pajamos * mokesciai)) * mokesciai2;
  return pelnas;
}
console.log(getPelnas(1500, 0.025, 0.015));


// pasikartoti IF
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

// var vardas = "Tomas";
//
// if (vardas == 'Tomas') {
//   console.log("Masinoms 10% nuolaida");
// }
// else if( vardas == "Paulius"){
//   console.log("Buitine technikai 30% nuolaida");
// }
// else {
//   console.log("5% nuolaida kelionems");
// }


// itvirtinti f-jas

// UZDUOTIS =======ismokti f-jas 50x===============
// A) sukurti kintamaji "vardas" Tomas

//var vardas = "Tomas";
// B) sukurti 50 f-ju.
// nelyginiu (1,3,5,...) funkciju pavadinimai getVardas1(), getVardas3(), ...
// nelygines f-jos turi "return" ir iskvietus turi grazinti varda ir jo skaiciu salia pvz: "Tomas1"
// lyginiu (2,4,6,8...) funkciju pavadinimai setVardas2(name), setVardas4(name), ...
// lygines f-jos turi pakeisti varda ir uzdeti skaiciu salia
// NOTE: visas f-jas iskviesti
// pvz.:
var vardas = "Tomas";
// 1
function getVardas1() {
  return vardas + "1";
}
console.log(  getVardas1() );

// 2
function setVardas2(name) {
   vardas = name + "2";
}
setVardas2("James"); // sugalvoti vis kita zodi

// 3
function getVardas3() {
  return vardas + "3";
}
console.log( getVardas3() );

// 4
function setVardas4(name) {
   vardas = name + "4";
}
setVardas4("John"); // sugalvoti vis kita zodi

// 5

function  getVardas5(){
  return vardas + "5";
}
console.log(getVardas5());

//6

function setVardas6(name){
  vardas = name + "6";
}
setVardas6("Robert");

//7
function getVardas7(){
  return vardas + "7";
}
console.log(getVardas7());

//8

function setVardas8(name){
  vardas = name + "8";
}
setVardas8("Michael");

//9

function getVardas9(){
  return vardas + "9";
}
console.log(getVardas9());

//10

function setVardas10(name){
  vardas = name + "10";
}

setVardas10("William");

//11

function getVardas11(){
  return vardas + "11";
}

console.log(getVardas11());

//12

function setVardas12(name){
  vardas = name + "12";
}

setVardas12("David");

//13

function getVardas13(){
  return vardas + "13";
}
console.log(getVardas13());

//14

function setVardas14(name){
  vardas = name + "14";
}

setVardas14("Richard");

//15

function getVardas15(){
  return vardas + "15";
}
console.log(getVardas15());

//16

function setVardas16(name){
  vardas = name + "16";
}
setVardas16("Joseph");

//17

function getVardas17(){
  return vardas + "17";
}

console.log(getVardas17());

//18

function setVardas18(name){
  vardas = name + "18";
}

setVardas18("Thomas");

//19

function getVardas19(){
  return vardas + "19";
}

console.log(getVardas19());

//20
function setVardas20(name){
  vardas = name + "20";
}
setVardas20("Charles");

//21
function getVardas21(){
  return vardas + "21";
}
console.log(getVardas21());


//22
function setVardas22(name){
vardas = name + "22";
}
setVardas22("Christopher");

//23
function getVardas23(){
  return vardas + "23";
}
console.log(getVardas23());

//24
function setVardas24(name){
  vardas = name + "24";
}
setVardas24("Daniel");

//25
function getVardas25(){
  return vardas + "25";
}
console.log(getVardas25());

//26
function setVardas26(name){
  vardas = name + "26";
}
setVardas26("Matthew");

//27
function getVardas27(){
  return vardas + "27";
}
console.log(getVardas27());

//28
function setVardas28(name){
  vardas = name + "28";
}
setVardas28("Anthony");

//29
function getVardas29(){
  return vardas + "29";
}
console.log(getVardas29());

//30
function setVardas30(name){
  vardas = name + "30";
}
setVardas30("Donald");

//31
function getVardas31(){
  return vardas + "31";
}
console.log(getVardas31());

//32
function setVardas32(name){
  vardas = name + "32";
}
setVardas32("Mark");

//33
function getVardas33(){
  return vardas + "33";
}
console.log(getVardas33());

//34
function setVardas34(name){
  vardas = name + "34";
}
setVardas34("Paul");

//35
function getVardas35(){
  return vardas + "35";
}
console.log(getVardas35());

//36
function setVardas36(name){
  vardas = name + "36";
}
setVardas36("Paul");

//37
function getVardas37(){
  return vardas + "37";
}
console.log(getVardas37());

//38
function setVardas38(name){
  vardas = name + "38";
}
setVardas38("Steven");

//39
function getVardas39(){
  return vardas + "39";
}
console.log(getVardas39());

//40
function setVardas40(name){
  vardas = name + "40";
}
setVardas40("Andrew");

//41
function getVardas41(){
  return vardas + "41";
}
console.log(getVardas41());

//42
function setVardas42(name){
  vardas = name + "42";
}
setVardas42("Kenneth");

//43
function getVardas43(){
  return vardas + "43";
}
console.log(getVardas43());

//44
function setVardas44(name){
  vardas = name + "44";
}
setVardas44("George");

//45
function getVardas45(){
  return vardas + "45";
}
console.log(getVardas45());

//46
function setVardas46(name){
  vardas = name + "46";
  }
setVardas46("Joshua");

//47
function getVardas47(){
  return vardas + "47";
}
console.log(getVardas47());

//48
function setVardas48(name){
  vardas = name + "48";
}
setVardas48("Kevin");

//49
function getVardas49(){
  return vardas + "49";
}
console.log(getVardas49());

//50
function setVardas50(name){
  vardas = name + "50";
}
setVardas50("Brian");
