let testValue ={
  Pneumonia : 0,   //폐렴
  Covid : 0,       //코로나
  cold : 0,        //감기
  flu : 0,         //독감
}
const forwardingValue = function(){
  const question1 = document.getElementsByName('cough');
  question1.forEach((value)=>{
    if(value.checked&&value.value=="Yes"){
      for(let i in testValue){
        testValue[i] += 1;
      }
    }
  })

  const question2 = document.getElementsByName('garae');
  question2.forEach((value)=>{
    if(value.checked&&value.value=="Yes"){
      testValue.cold += 1;
    }
  })

  const question3 = document.getElementsByName('Heat');
  question3.forEach((value)=>{
    if(value.checked&&value.value=="Yes"){
      for(let i in testValue){
        testValue[i] += 1;
      }
    }
  })

  const question4 = document.getElementsByName('Head');
  question4.forEach((value)=>{
    if(value.checked&&value.value=="Yes"){
      for(let i in testValue){
        testValue[i] += 1;
      }
    }
  })

  const question5 = document.getElementsByName('Snot');
  question5.forEach((value)=>{
    if(value.checked&&value.value=="Yes"){
      testValue.flu += 1;
      testValue.cold += 1;
    }
  })

  const question6 = document.getElementsByName('Sick');
  question6.forEach((value)=>{
    if(value.checked&&value.value=="Yes"){
      for(let i in testValue){
        testValue[i] += 1;
      }
    }
  })  

  const question7 = document.getElementsByName('Muscle');
  question7.forEach((value)=>{
    if(value.checked&&value.value=="Yes"){
      testValue.Covid+=1;
    }
  })

  const question8 = document.getElementsByName('Throw');
  question8.forEach((value)=>{
    if(value.checked&&value.value=="Yes"){
      testValue.Pneumonia += 1;
    }
  })

  const question9 = document.getElementsByName('Dirra');
  question9.forEach((value)=>{
    if(value.checked&&value.value=="Yes"){
      testValue.Pneumonia += 1;
      testValue.Covid += 1;
    }
  })

  const question10 = document.getElementsByName('Sore');
  question10.forEach((value)=>{
    if(value.checked&&value.value=="Yes"){
      testValue.Pneumonia += 100;
    }
  })

  let num =0;
  for(let i in testValue){
    if(testValue[i]>num){
      num = testValue[i];
    }
  }
  for(let i in testValue){
    if(testValue[i]==num){
      document.getElementsByName(i)[0].value = 1;
    }
  }
  console.log(testValue);
}