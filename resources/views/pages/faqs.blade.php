@extends('layouts.app')



@section('content')
    <div class="pages-div">

  
<div class="mainbody-vent">

    <div class="TravelPlansp1" style="border-bottom: none;">
                   <h1>
                       <span id="ContentPlaceHolder1_Title1" style="font-family: BaskervilleBT-Bold,serif;font-weight:normal;">FAQS</span></h1>
                   
               </div>
               
               
   <div class="FaQ">
   
   <h1 style="font-family: ProximaNova-Regular,sans-serif;font-weight: bold;">
                       GENERAL QUESTIONS
                   </h1>
                   
           <div id="ContentPlaceHolder1_Accordion" style="height: auto; overflow: auto;">
           <input type="hidden" name="ctl00$ContentPlaceHolder1$Accordion_AccordionExtender_ClientState" 
       id="ContentPlaceHolder1_Accordion_AccordionExtender_ClientState" value="-1">
       
       
       
      <button class="accordion">1. Who we are?</button>
       
       <div class="panel">
     <p>SuperPredictions is all about Football statistics, match predictions, bet tips, expert reviews and bet information. 
	 We cover all the major football events across Europe and the world. We do thorough match analysis and give our users great 
	 and safe bet tips to gamble safely and resposibly </p>
   </div>
       
   
      <button class="accordion">2. What are Top Tips?</button>
       
       <div class="panel">
     <p>Top Tips are well analysed predictions with 100% probability of going through as predicted. These are very safe tips to gamble with, they give very
     high chances of winnings when you bet using them</p>
   </div>
   
       
      <button class="accordion">3. Should I subscribe to use your services?</button>
       
       <div class="panel">
     <p>Superbetprediction offers free bet tips throughout the year.You don't need to subscribe to our website for you to use our services.
	 We dont sell our predictions so take caution of conmen.</p>
   </div>
   
       
      <button class="accordion">4. Meanings of our tip types?</button>
       
       <div class="panel">
     <p><strong>3-way betting:</strong> The most popular and straightforward bet you can find. You’re simply asked to bet on the match winner 
	 (1 for the Home Team Win, 2 for the Away Team Win) or the possibility of a draw (X). <br>
        <strong>1 or X:</strong> The bet wins if there’s a Home Win or Draw. <br>
		<strong>1 &nbsp;or 2:</strong> The bet wins if either&nbsp;team wins the match.<br>
		<strong>X or 2:&nbsp;</strong>The bet wins if there's a Draw or an Away Win<br>
		<strong>Ov 2.5/Un 2.5:&nbsp;</strong>You bet on the total number of goals that will be scored by both teams, in a match.
		so to win an Over 2,5 bet you need 3 or more goals and 2 or less goals for an Under 2,5 bet.<br>
		<strong>Ov 1.5/Un 1.5:&nbsp;</strong>You bet on the total number of goals that will be scored by both teams, in a match.
		so to win an Over 1.5 bet you need 2 or more goals and 1 or less goals for an Under 1.5 bet.<br>
		<strong>GG:</strong> Here you’re betting on whether both teams will score in the match.The bet wins if each team scores atleast 1 goal.<br>
		</p>
   </div>
   
     
   
       
      
     
   </div>
   
   
   </div>
   
   <div class="clear">
           </div>
   </div>
   

    </div>

    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
  
@endsection


