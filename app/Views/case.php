<title>Case</title>
<body>
     <div class="case-head">
          <h1><?php echo $case[0]['citation']; ?></h1>
          <a class="case-link" href="<?php echo $case[0]['fileLink']; ?>">Full Case Citation</a>
     </div>

<div class="case-container">
     <div class="case-split">
          <div class="case-row"> 
               <h3 class="case-split-1">File Number(s)</h3>
               <h3 class="case-split-2"><?php echo $case[0]['fileNumber']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Date of Decision</h3>
               <h3 class="case-split-2"><?php echo $case[0]['decisionDate']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Date AAT Lodged</h3>
               <h3 class="case-split-2"><?php echo $case[0]['dateAAT']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Days from lodgement to decision</h3>
               <h3 class="case-split-2"><?php echo $case[0]['daysFromDecision']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Location</h3>
               <h3 class="case-split-2"><?php echo $case[0]['location']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Appeal Type</h3>
               <h3 class="case-split-2"><?php echo $case[0]['interlocutoryAppeal']; ?></h3>
          </div>
     </div>
     <div class="case-split">
          <div class="case-row"> 
               <h3 class="case-split-1">Decision Issue</h3>
               <h3 class="case-split-2"><?php echo $case[0]['decisionIssue']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Decision Sub-Issue</h3>
               <h3 class="case-split-2"><?php echo $case[0]['decisionSubIssue']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Decision Sub-Issue Comments</h3>
               <h3 class="case-split-2"><?php echo $case[0]['decisionSubIssueComments']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Decision Type</h3>
               <h3 class="case-split-2"><?php echo $case[0]['decisionType']; ?></h3>
          </div>
     </div>
</div> 
<div class="border"></div>


<div class="case-container">
     <div class="case-split">
          <div class="case-row"> 
               <h3 class="case-split-1">Impairment(s)</h3>
               <h3 class="case-split-2"><?php echo $case[0]['impairmentNotes']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Impairment(s) Category</h3>
               <h3 class="case-split-2"><?php echo $case[0]['applicantImpairment']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Applicant Representative</h3>
               <h3 class="case-split-2"><?php echo $case[0]['applicantRepresentative']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Applicant Age</h3>
               <h3 class="case-split-2"><?php echo $case[0]['applicantAge']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Respondent's representative</h3>
               <h3 class="case-split-2"><?php echo $case[0]['representativeCategory']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Applicant Gender</h3>
               <h3 class="case-split-2"><?php echo $case[0]['applicantGender']; ?></h3>
          </div>
     </div>
     <div class="case-split">
          <div class="case-row"> 
               <h3 class="case-split-1">History of abuse</h3>
               <h3 class="case-split-2"><?php echo $case[0]['abuseHistory']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Culturally and Linguistically Diverse</h3>
               <h3 class="case-split-2"><?php echo $case[0]['cald']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Aboriginal and Torres Strait Islander</h3>
               <h3 class="case-split-2"><?php echo $case[0]['atsi']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Date of Original Decision</h3>
               <h3 class="case-split-2"><?php echo $case[0]['dateOriginalDecision']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Date Internal Review Requested</h3>
               <h3 class="case-split-2"><?php echo $case[0]['dateInternalReviewRequested']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Date of Internal Review Decision</h3>
               <h3 class="case-split-2"><?php echo $case[0]['dateInternalReviewDecision']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Date of Hearing</h3>
               <h3 class="case-split-2"><?php echo $case[0]['dateHearing']; ?></h3>
          </div>
     </div>
</div> 
<div class="border"></div>
<div class="case-container">
     <div class="case-split">
          <div class="case-row"> 
               <h3 class="case-split-1">Date of First Case Conference</h3>
               <h3 class="case-split-2"><?php echo $case[0]['dateFirstCaseConference']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Number of Case Conferences</h3>
               <h3 class="case-split-2"><?php echo $case[0]['numberCaseConferences']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Number of Directions Hearing</h3>
               <h3 class="case-split-2"><?php echo $case[0]['numberDirectionsHearing']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Number of Return of Summons Hearing</h3>
               <h3 class="case-split-2"><?php echo $case[0]['numberReturnSummonsHearing']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Number of Interlocutory Hearings</h3>
               <h3 class="case-split-2"><?php echo $case[0]['numberInterlocutoryHearings']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Conciliation </h3>
               <h3 class="case-split-2"><?php echo $case[0]['conciliation']; ?></h3>
          </div>
     </div>
     <div class="case-split">
          <div class="case-row"> 
               <h3 class="case-split-1">Appealed to Federal Court</h3>
               <h3 class="case-split-2"><?php echo $case[0]['appealedFederalCourt']; ?></h3>
          </div>
          <div class="case-row"> 
               <h3 class="case-split-1">Notes</h3>
               <h3 class="case-split-2"><?php echo $case[0]['notes']; ?></h3>
          </div>
     </div>
</div> 
<div class="disclaimer-container">
     <h1>Disclaimer</h1>
     <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Cubilia nec nunc at mi finibus blandit vestibulum inceptos diam. Suspendisse platea quis; litora sit cursus eget accumsan aenean donec. Cras blandit commodo malesuada imperdiet faucibus. Massa porta velit per augue convallis sit. Finibus ac senectus vitae quisque facilisi venenatis montes. Dolor ipsum porta aptent orci velit porta natoque sodales cras. Finibus erat ligula etiam luctus litora eget purus nisi. Velit cras etiam; arcu ante elementum magna?
          Dolor risus praesent; semper pretium a diam. Accumsan rhoncus enim velit mi efficitur. Ridiculus eu tincidunt finibus curabitur potenti dictum. Sem turpis pulvinar nibh suspendisse dolor quam semper etiam orci. Risus urna tincidunt curae ad pharetra conubia semper. Pulvinar iaculis venenatis taciti a eleifend nostra facilisis. Turpis elit vestibulum, euismod fusce viverra penatibus. Tristique iaculis sit a sollicitudin convallis placerat.
          Quisque quis proin amet eleifend duis urna blandit sit. Varius nisi hac molestie et eleifend vehicula per curabitur posuere. Mus aliquam aliquam vivamus ad nisl etiam. Enim facilisi dolor suspendisse eu posuere in etiam. Mauris dictumst facilisi est fringilla cursus sagittis pellentesque torquent. Lacus lobortis eget nisi sodales curae id efficitur. Condimentum mauris varius praesent ultrices et quam. Curabitur feugiat quisque parturient est; purus fames? Sodales bibendum metus neque cubilia accumsan ligula semper.</p>
</div>
</body>
</html>