<title>New Record</title>
<body>
     <h1 class="record-title">New Record</h1>
     <?php echo form_open(base_url() . 'record/check_record'); ?>
	<?php echo $error; ?>
     <div class="case-head record-head">
          <h2>Citation *</h2>
          <input type="text" class="input-box head-input" required="required" name="citation">
     </div>

<div class="case-container">
     <div class="case-split">
          <div class="case-row"> 
               <h4 class="case-split-1 ">File Number(s) *</h4>
               <input type="text" class="input-box case-split-2"  required="required" name="fileNumber">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Date of Decision *</h4>
               <input type="date" class="input-box case-split-2"  required="required" name="decisionDate">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Date AAT Lodged *</h4>
               <input type="text" class="input-box case-split-2"  required="required" name="dateAAT">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Days from lodgement to decision</h4>
               <input type="text" class="input-box case-split-2" name="daysFromDecision">
          </div>

          <div class="case-row"> 
               <h4 class="case-split-1">Location *</h4>
               <select name="location" class="input-box case-split-2">
                    <option value="Sydney">Sydney</option>
                    <option value="Brisbane">Brisbane</option>
                    <option value="Melbourne">Melbourne</option>
                    <option value="Adelaide">Adelaide</option>
                    <option value="Canberra">Canberra</option>
                    <option value="Hobart">Hobart</option>
                    <option value="Perth">Perth</option>
                    <option value="Perth">Darwin</option>
               </select>
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Appeal Type *</h4>
               <select name="appealType" class="input-box case-split-2">
                    <option value="Hearing">Hearing</option>
                    <option value="Interlocutory">Interlocutory</option>
               </select>
          </div>
     </div>
     <div class="case-split">
          <div class="case-row"> 
               <h4 class="case-split-1 ">Decision Issue *</h4>
               <select name="decisionIssue" class="input-box case-split-2">
                    <option value="Access">Access</option>
                    <option value="Supports">Supports</option>
                    <option value="Jurisdiction">Jurisdiction</option>
                    <option value="Other">Other</option>
               </select>
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Decision Sub-Issue</h4>
               <input type="text" class="input-box case-split-2" name="decisionSubIssue">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Decision Sub-Issue Comments</h4>
               <input type="text" class="input-box case-split-2" name="decisionSubIssueComments">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Decision Type *</h4>
               <select name="decisionType" class="input-box case-split-2">
                    <option value="Affirmed">Affirmed</option>
                    <option value="Dismissed">Dismissed</option>
                    <option value="Varied">Varied</option>
                    <option value="Remit">Remit</option>
                    <option value="Set Aside">Set Aside</option>
                    <option value="Jurisdiction Confirmed">Jurisdiction Confirmed</option>
                    <option value="Other">Other</option>
               </select>
          </div>
     </div>
</div> 
<div class="border"></div>


<div class="case-container">
     <div class="case-split">
          <div class="case-row"> 
               <h4 class="case-split-1 ">Impairments *</h4>
               <input type="text" class="input-box case-split-2"  required="required" name="impairmentNotes">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Impairment(s) Category *</h4>
               <input type="text" class="input-box case-split-2" name="applicantImpairment">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Applicant Representative *</h4>
               <select name="applicantRepresentative" class="input-box case-split-2">
                    <option value="Legal">Legal</option>
                    <option value="Friend or Family">Friend or Family</option>
                    <option value="Appeals Advocate">Appeals Advocate</option>
                    <option value="Service Provider">Service Provider</option>
                    <option value="Legal Aid">Legal Aid</option>
                    <option value="No representative">No representative</option>
               </select>
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Applicant Age *</h4>
               <input type="text" class="input-box case-split-2"  required="required" name="applicantAge">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Respondent's representative *</h4>
               <select name="representativeCategory" class="input-box case-split-2">
                    <option value="Internal (NDIA)">Internal (NDIA)</option>
                    <option value="External (Private firm/AGS)">External (Private firm/AGS)</option>
                    <option value="Not Specified">Not Specified</option>
               </select>
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Applicant Gender *</h4>
               <select name="applicantGender" class="input-box case-split-2">
                    <option value="Cis-Male">Cis-Male</option>
                    <option value="Cis-Female">Cis-Female</option>
                    <option value="Cis-Male">Trans Male</option>
                    <option value="Cis-Female">Trans Female</option>
                    <option value="Not Specified">Not Specified</option>
               </select>
          </div>
     </div>
     <div class="case-split">
          <div class="case-row"> 
               <h4 class="case-split-1 ">History of abuse *</h4>
               <input type="text" class="input-box case-split-2"  required="required" name="citation">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Culturally and Linguistically Diverse *</h4>
               <select name="cald" class="input-box case-split-2">
                    <option value="True">True</option>
                    <option value="False">False</option>
                    <option value="Not Specified">Not Specified</option>
               </select>
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Aboriginal and Torres Strait Islander *</h4>
               <select name="atsi" class="input-box case-split-2">
                    <option value="True">True</option>
                    <option value="False">False</option>
                    <option value="Not Specified">Not Specified</option>
               </select>
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Date of Original Decision *</h4>
               <input type="text" class="input-box case-split-2"  required="required" name="dateOriginalDecision">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Date Internal Review Requested</h4>
               <input type="text" class="input-box case-split-2"  name="dateInternalReviewRequested">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Date of Internal Review Decision</h4>
               <input type="text" class="input-box case-split-2"  name="dateInternalReviewDecision">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Date of Hearing</h4>
               <input type="text" class="input-box case-split-2"  name="dateHearing">
          </div>
     </div>
</div> 
<div class="border"></div>
<div class="case-container">
     <div class="case-split">
          <div class="case-row"> 
               <h4 class="case-split-1 ">Date of First Case Conference</h4>
               <input type="text" class="input-box case-split-2"  name="dateFirstCaseConference">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Number of Case Conferences</h4>
               <input type="text" class="input-box case-split-2" name="numberCaseConferences">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Number of Directions Hearing</h4>
               <input type="text" class="input-box case-split-2" name="numberDirectionsHearing">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Number of Return of Summons Hearing</h4>
               <input type="text" class="input-box case-split-2"  name="numberReturnSummonsHearing">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Number of Interlocutory Hearings</h4>
               <input type="text" class="input-box case-split-2" name="numberInterlocutoryHearings">
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Conciliation </h4>
               <input type="text" class="input-box case-split-2" name="conciliation	">
          </div>
     </div>
     <div class="case-split">
          <div class="case-row"> 
               <h4 class="case-split-1 ">Appealed to Federal Court *</h4>
               <select name="appealedFederalCourt" class="input-box case-split-2">
                    <option value="True">True</option>
                    <option value="False">False</option>
                    <option value="Not Specified">Not Specified</option>
               </select>
          </div>
          <div class="case-row"> 
               <h4 class="case-split-1 ">Notes</h4>
               <input type="text" class="input-box case-split-2 notes" name="notes">
          </div>
     </div>
</div> 
<div class="submit-container">
     <button type="submit" class="submit-btn">SUBMIT</button>
</div>
<?php echo form_close(); ?>
</body>
</html>