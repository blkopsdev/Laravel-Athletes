@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'faq', 'title' => __('Recruiting Brain -
FAQ')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-md-8">
                <h2 class="text-primary"><strong>Premium FAQ</strong></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div id="accordion" role="tablist">
                    <div class="card-collapse">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne" class="collapsed text-primary font-weight-bold">When does The Recruiting
                                    Brain first start identifying prospects and for how long
                                    does coverage continue?
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                            <div class="card-body">
                                <p>Prospective college football players are covered from when they are first identified until September 1 of their junior year. This includes updating all relevant available information in the Athlete Bios and regularly updating the player rankings and ratings. </p>
                                <p>Following September 1 of a prospect’s junior year we will attempt to update the database with respect to major college commitments and perhaps make other minor changes through December of their junior year, however for all practical purposes the database will be closed for the junior class and the focus will turn exclusively to prospects who are sophomores and younger.</p>
                            </div>
                        </div>
                    </div>
					<div class="card-collapse">
                        <div class="card-header" role="tab" id="headingTwo">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed text-primary font-weight-bold">
									How often is the database updated?
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                            <div class="card-body">
                                <p>The on-line database is updated at least once a month. Updates always include newly modified rankings and ratings in addition to numerous new player additions and modifications.</p>
								<p>On average, over the course of each month there will be over 1,500 new prospects added to the database. In addition, over 2,000 other prospects will have their athlete bios modified.</p>
                            </div>
                        </div>
                    </div>
					<div class="card-collapse">
                        <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed text-primary font-weight-bold">
									What reports are available in the database?
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" style="">
                            <div class="card-body">
                                <p>Please note that when clicking on the database tab it may take a few seconds for the database search functionality to appear on the page.</p>
								<p>There are a variety of search functions available in the database. Players can be directly searched by name or city/school.</p>
								<p>There are several reports that can be generated. These reports can be sliced and diced in a number of different ways to provide recruiters with custom-tailored reports for specific positions, states, classes and ratings.</p>
								<p>Below is a listing of some of the key reports. They are also relatively self-explanatory and easy to produce when using the database search tool:</p>
								<ul>
									<li>National Position Rankings (includes college offers received & direct video links)</li>
									<li>State Position Rankings</li>
									<li>State Overall Rankings (currently only available on a limited basis, with overall rankings only broken down by ratings)</li>
									<li>State By City/School</li>
									<li>National Commitments</li>
									<li>National Top Offers</li>
									<li>Contacts Reports (includes school address and, for many top prospects, direct links via social media)</li>
								</ul>
                            </div>
                        </div>
                    </div>
					<div class="card-collapse">
                        <div class="card-header" role="tab" id="headingFour">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseFour" aria-expanded="false"aria-controls="collapseFour" class="collapsed text-primary font-weight-bold">
									What information is included in the Athlete Bio?
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion" style="">
                            <div class="card-body">
                                <p>Below is a summary of each field provided in the Athlete Bio template.</p>
								<p>More detailed descriptions of some of these fields can be found in other FAQ responses.</p>
								<ul>
									<li><strong>Name:</strong> The prospect name, first name given first.</li>
									<li><strong>Class:</strong> Provides the year the prospect will be graduating from high school.</li>
									<li><strong>Projected College Position:</strong> The most likely position that the prospect will play in college.</li>
									<li><strong>Position:</strong> Current position played, with most likely college position listed first.</li>
									<li><strong>Height:</strong> Reported height.</li>
									<li><strong>Weight:</strong> Reported weight.</li>
									<li><strong>Forty:</strong> Reported best forty time.</li>
									<li><strong>City/School:</strong> City and school that the prospect attends, listed in that order.</li>
									<li><strong>State:</strong> State of the school where the prospect is playing football.</li>
									<li><strong>College Commitment:</strong> Where the prospect has committed. Limited to Division I-A schools</li>
									<li><strong>Top Offers:</strong> Lists the Division I offers reportedly received by prospect.</li>
									<li><strong>Contact Information:</strong> Direct social media links for most of the top prospects. High school mailing address, telephone and fax numbers. Sometimes provide home contact info as well.</li>
									<li><strong>Synopsis:</strong> Reserved for future use.</li>
									<li><strong>National Ranking Position:</strong> The prospect's national ranking at his projected college position within his class.</li>
									<li><strong>State Ranking:</strong> The prospect's overall state ranking within his class. Currently only provided on a very limited basis.</li>
									<li><strong>Rating:</strong> The prospect's rating, from one to five. Five being the most highly rated prospects.</li>
									<li><strong>National Honors:</strong> A listing of relevant national honors/rankings, when available.</li>
									<li><strong>Junior Local Honors:</strong> A listing of relevant junior year honors. This field will usually be left blank going forward as we no longer cover junior seasons and focus exclusively on freshman and sophomores.</li>
									<li><strong>Sophomore Local Honors:</strong> A listing of relevant sophomore year honors, which may include all-state, all-area and all-conference honors and local player ratings.</li>
									<li><strong>Freshman Local Honors:</strong> A listing of relevant freshman year honors, which may include all-state, all-area and all-conference honors and local player ratings.</li>
									<li><strong>Combines:</strong> A summary of available combine results.</li>
									<li><strong>Video Links:</strong> For the majority of the top prospects video links are provided.</li>
									<li><strong>News And Notes:</strong> This is the core text section which includes available relevant information on the prospect with respect to on-field performance, academics, performance in other sports and combine and weight testing numbers.</li>
								</ul>
                            </div>
                        </div>
                    </div>
					<div class="card-collapse">
                        <div class="card-header" role="tab" id="headingFive">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="collapsed text-primary font-weight-bold">
									Can you please explain what your Ratings mean?
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion" style="">
                            <div class="card-body">
                                <p>Prospects are rated from one to five stars.</p>
								<p>The five star prospects are the most highly rated prospects, while the one star prospects are the lowest rated prospects or the ones we don't have sufficient information available on to give a high ranking.</p>
								<p>You should note that the numerical ratings mean different things for different classes. This is because as the recruiting timeline progresses and more information is available for a prospect we are more easily able to discern his college potential.</p>
								<p>Please keep in mind that for the younger prospects, the ratings can be very fluid as new prospects are added to the database and players move up and down in their ratings based on this new information. Coaches should note that ratings are a "snapshot" summary provided at a given time but that "snapshot" could easily change, especially early in the recruiting timeline.</p>
								<p>As prospects approach their junior year they are more narrowly tailored with respect to college potential. Here is a general overview of what then numeric ratings mean:</p>
								<ul>
									<li><strong>5 stars:</strong> A potential D-I prospect</li>
									<li><strong>4 stars:</strong> A potential college prospect</li>
									<li><strong>3 stars:</strong> A potential small college prospect</li>
									<li><strong>2 stars:</strong> On the radar</li>
									<li><strong>1 stars:</strong> Worth a mention</li>
								</ul>
                            </div>
                        </div>
                    </div>
					<div class="card-collapse">
                        <div class="card-header" role="tab" id="headingSix">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix" class="collapsed text-primary font-weight-bold">
									Can you please explain your National Rankings?
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion" style="">
                            <div class="card-body">
                                <p>The rankings are provided to provide college scouts with some sort of order behind chaos of trying to categorize prospects.</p>
								<p>They are especially valuable in trying to put some order to the more highly rated (e.g. five star) prospects. However as one works down the ranking list they, by their very nature, become more imprecise. They also, of course, become more accurate as underclassmen progress along the recruiting timeline toward their junior year.</p>
								<p>Our rankings should essentially be used by colleges as a recommended order to contact and evaluate prospects. So a school that recruits nationally, such as Notre Dame, would work from the top down at each position while a regional shcool may just want to focus on the top-rated prospects in its vicinity.</p>
                            </div>
                        </div>
                    </div>
					<div class="card-collapse">
                        <div class="card-header" role="tab" id="headingSeven">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven" class="collapsed text-primary font-weight-bold">
									How do I interpret the information in the honors sections?
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion" style="">
                            <div class="card-body">
                                <p>The information included in these sections can be divided into two categories:</p>
								<ol>
									<li>
										<p>A listing of relevant honors, which may include all-state, all-area and all-conference honors</p>
										<p>These honors are abbreviated as follows:</p>
										<ul>
											<li><strong>Honors level:</strong> First Team (“1”), Second Team (“2”), Special Mention (“SM”), High Honorable Mention (“HHM”), Honorable Mention (“HM”)</li>
											<li><strong>Source of honor:</strong> The name of the newspaper (e.g. “Chicago Tribune”), wire service (e.g. “AP”) of other media bestowing the honor.</li>
										</ul>
										<br>
										<p>For pre-season honors the abbreviation “PS” will appear in the honor.</p>
										<ul>
											<li><strong>The level of play of the honor:</strong> This could refer to a class or division level (e.g. “A” for Class A, “Division I” for Division I).</li>
											<li><strong>The geographic area that the honor encompasses:</strong> This could refer to an all-state team (abbreviated “AS”), or some other type of all-area team (e.g. “District”, “City”, “County”, “Area”, “Region”, “Metro”,  “Suburban”, “Conference”, “League”).</li>
										</ul>
										<br>
										<p>Here are some examples:</p>
										<ul>
											<li><strong>1-Chicago Tribune-AS:</strong> First Team Chicago Tribune All-State</li>
											<li><strong>HM-AP-Division 3-4-AS:</strong> Honorable Mention Associated Press Division 3-4 All-State  </li>
											<li><strong>2-District 23-5A:</strong> Second Team All-District 23, Class 5A</li>
											<li><strong>1-Chicago Tribune-PS-AS:</strong> First Team Chicago Tribune Pre-Season All-State</li>
										</ul>
										<br>
									</li>
									<li>
										<p>A listing of player rankings.</p>
										<p>Some media provide player rankings of prospects in their area of coverage.</p>
										<p>These are usually abbreviated by giving the player ranking first provided by the area and then the media source and date provided in brackets.</p>
										<p>Here are a few examples:</p>
										<ul>
											<li><strong>1-Juniors-Dade County (Miami Herald, August 2007):</strong> The number one ranked junior prospect in Dade County by the Miami Herald in August 2007.</li>
											<li><strong>1-Dade County (Miami Herald, August 2007):</strong> HThe number one ranked prospect in Dade County, irrespective of class, by the Miami Herald in August 2007.</li>
											<li><strong>Top 25 Juniors-Dade County (Miami Herald, August 2007):</strong> Ranked as one of the top 25  junior prospect in Dade County by the Miami Herald in August 2007.</li>
										</ul>
									</li>
								</ol>
                            </div>
                        </div>
                    </div>
					<div class="card-collapse">
                        <div class="card-header" role="tab" id="headingEight">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight" class="collapsed text-primary font-weight-bold">
									How do I go about reviewing the information in the "News and Notes" section?
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight" data-parent="#accordion" style="">
                            <div class="card-body">
                                <p>The News and Notes section is the primary text section of the Athlete Bio. It includes available relevant information on the prospect with respect to on-field performance, academics, performance in other sports and combine and weight testing numbers.</p>
								<p>For the top prospects there will often be quite a bit of information available. The information is divided by dot-dots so that it is more easily legible.</p>
								<p>The most relevant information is always at the front of the section. I will often put in a one-liner giving an early opinion of where the prospect ranks within the state or nation at his position. This may say something along the lines of:</p>
								<ul>
									<li>One of the best prospects in the nation</li>
									<li>One of the best linebackers in the nation</li>
									<li>One of the best prospects in the state</li>
									<li>One of the best linebackers in the state</li>
									<li>One of the better linebackers in the state</li>
									<li>One of the better linebackers in the area</li>
								</ul>
								<p>As you can see, the one-liners from above are in descending order from top prospects to good prospects.</p>
								<p>Many prospects will not have a one-liner associated with them. For most, it is either because they are not elite prospects or because we do not have sufficient available information to include a one-liner. For some top prospects, however, a one-liner may be missing. In that case, you can get a sense of how highly we regard the particular prospect by looking at how he fits into the national rankings and ratings. These are the more quantitative tools that we use to assess prospects and they are updated the most frequently. </p>
								<p>After the one-liner, we will try and provide statistical information with respect to on-field performance as a junior, sophomore and freshman. This is followed by some comments we have put together on the prospect, weight-lifting, combine and other relevant testing numbers, performance in other sports, a comment on bloodlines and academic numbers (GPA and test scores, if available). </p>
                            </div>
                        </div>
                    </div>
					<div class="card-collapse">
                        <div class="card-header" role="tab" id="headingNine">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine" class="collapsed text-primary font-weight-bold">
									How do I interpret the "Combines" results?
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordion" style="">
                            <div class="card-body">
                                <p>For some prospects The Recruiting Brain posts raw combine numbers. This raw data is not always easy to read but coaches with experience in reviewing combine numbers should often be able to discern between the key numbers (height, weight, forty, shuttle, bench reps at 185 pounds, vertical).</p>
								<p>The primary purpose in posting the combine figures is to verify for coaches when The Recruiting Brain has raw data with respect to a prospect's test numbers as opposed to figures that are simply self-reported or sent to us by the coaching staff or third party sources.</p>
								<p>Even if the raw data in this section is not easily discernable, as these are verified figures they will be included in the height, weight and forty sections unless we have other more up-to-date information that we believe to be more representative of a prospect's measurables. We will also often post summaries of combine performance within the News and Notes section which are easily legible.</p>
								<p>Coaches should also note that all combines do not necessarily test in the same way. Some use more advanced laser-timing, some electronic-timing and some simply do it the old-fashioned way, with hand-held stop watches. </p>
								<p>As a result, athlete performance can widely vary based upon the testing methodology (and weather conditions). This variance will not be easily identifiable to college coaches perusing the results, however in compiling our rankings and ratings we do factor in these variations in combine conditions. For instance, the performance of a prospect at an elite national combine who runs a 4.64 laser-timed forty and is the fastest performer at the combine will likely carry more weight than a prospect who runs a 4.45 hand-held time at a local combine where he is the seventh-fastest performer.</p>
                            </div>
                        </div>
                    </div>
					<div class="card-collapse">
                        <div class="card-header" role="tab" id="headingTen">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseTen" aria-expanded="false"
                                    aria-controls="collapseTen" class="collapsed text-primary font-weight-bold">
									What should I consider when reviewing reported heights, weights and forty times?
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen" data-parent="#accordion" style="">
                            <div class="card-body">
                                <p>The Recruiting Brain attempts to provide the most accurate and up-to-date figures with respect to height, weight and forty time. Independently verified recent figures, such as from combines, will supersede unverified reported numbers.</p>
                            </div>
                        </div>
                    </div>
					<div class="card-collapse">
                        <div class="card-header" role="tab" id="headingEleven">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseEleven" aria-expanded="false"
                                    aria-controls="collapseEleven" class="collapsed text-primary font-weight-bold">
									Can you provide more information on your “Top Offers” section? 
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseEleven" class="collapse" role="tabpanel" aria-labelledby="headingEleven" data-parent="#accordion" style="">
                            <div class="card-body">
                                <p>This section lists the Division I offers reportedly received by the prospect. These are often self-reported and are, of course, difficult to independently verify.</p>
                                <p>As we only cover prospects who are not yet seniors, all offers are verbal.</p>
								<p>The purpose of this section is to give coaches a sense of how heavily recruited a prospect is through his reported offers.</p>
								<p>The offer list is, when possible, given in chronological order with the schools that offered earliest appearing first on the list.</p>
                            </div>
                        </div>
                    </div>
					<div class="card-collapse">
                        <div class="card-header" role="tab" id="headingTwelve">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseTwelve" aria-expanded="false"
                                    aria-controls="collapseTwelve" class="collapsed text-primary font-weight-bold">
									Can you please explain the abbreviations that you use in your Athlete Bio? 
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwelve" class="collapse" role="tabpanel" aria-labelledby="headingTwelve" data-parent="#accordion" style="">
                            <div class="card-body">
                                <p>In the News and Notes section, key abbreviations used are the following:</p>
								<ul>
									<li><strong>PS:</strong> Pre-season</li>
									<li><strong>MBD:</strong> Message Board (usually referring to a posting taken from a message board)</li>
									<li><strong>INTs:</strong> Interceptions</li>
									<li><strong>TFL:</strong> Tackles for Loss</li>
									<li><strong>PBUs:</strong> Pass Break-Ups</li>
									<li><strong>FRs:</strong> Fumble-recoveries</li>
									<li><strong>FFs:</strong> Forced fumbles</li>
									<li><strong>ypc:</strong> Yards per carry or yards per catch, depending on whether used with rushing or receiving stats</li>
									<li><strong>%:</strong> Usually refers to pass completion percentage</li>
								</ul>
								<p>With respect to the honors sections, more on those abbreviations can be found in the response to the FAQ “How do I interpret the information in the honors sections?”</p>
                            </div>
                        </div>
                    </div>
					{{-- <div class="card-collapse">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne" class="collapsed text-primary font-weight-bold">When does The Recruiting
                                    Brain first start identifying prospects and for how long
                                    does coverage continue?
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                            <div class="card-body">
                                <p>Prospective college football players are covered from when they are first identified until September 1 of their junior year. This includes updating all relevant available information in the Athlete Bios and regularly updating the player rankings and ratings. </p>
                                <p>Following September 1 of a prospect’s junior year we will attempt to update the database with respect to major college commitments and perhaps make other minor changes through December of their junior year, however for all practical purposes the database will be closed for the junior class and the focus will turn exclusively to prospects who are sophomores and younger.</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
