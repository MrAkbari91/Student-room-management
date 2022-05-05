    <?php
		  session_start();
		  include 'include/header.php';
		  $array = $_SESSION['data'];
	
    ?>
		<div>
			<div class="row m-0 pt-5 pb-5">
				<div class="col-md-6 m-auto pt-5 pb-5 border-bg">
					<div>
						<div class="text-center pb-0 border-bottom mb-3">
							<h2 class="text-color font-weight-bold">Room Change Request</h2>
						</div>
						<div>
							<table class="m-auto">
								<tr>
									<td class="pr-3">
										<label class="btn-colo" for="Category">Category</label>
									</td>
									<td class="pl-3">
										<select class="selct-type" id="Category">
										    <option value="withRoommate">With Roommate</option>
										    <option value="WithoutRoommate">Without Roommate</option>
										</select>
									</td>
								</tr>
								<tr>
									<td class="pr-3">
										<label for="Building" class="btn-colo">Building</label>
									</td>
									<td class="pl-3">
										<select class="selct-type" id="Building">
										    <option value="">Select Building</option>
										    <option value="Building1">Building 1</option>
										    <option value="Building2">Building 2</option>
										    <option value="Building3">Building 3</option>
										    <option value="Building4">Building 4</option>
										    <option value="Building5">Building 5</option>
										</select>
									</td>
								</tr>
								<tr>
									<td class="pr-3">
										<label class="btn-colo" name="Room">Room</label>
									</td>
									<td class="pl-3">
									<select class="selct-type" id="Room1">
										    <option value="Room1">Room 1</option>
										    <option value="Room2">Room 2</option>
										    <option value="Room3">Room 3</option>
										    <option value="Room4">Room 4</option>
										    <option value="Room5">Room 5</option>
										    <option value="Room6">Room 6</option>
										    <option value="Room7">Room 7</option>
										    <option value="Room8">Room 8</option>
										    <option value="Room9">Room 9</option>
										    <option value="Room10">Room 10</option>
										    <option value="Room11">Room 11</option>
										    <option value="Room12">Room 12</option>
										    <option value="Room13">Room 13</option>
										    <option value="Room14">Room 14</option>
										    <option value="Room15">Room 15</option>
										    <option value="Room16">Room 16</option>
										    <option value="Room17">Room 17</option>
										    <option value="Room18">Room 18</option>
										    <option value="Room19">Room 19</option>
										    <option value="Room20">Room 20</option>
										</select>
										<select class="selct-type" id="Room2" style="display: none;">
										    <option value="Room21">Room 21</option>
										    <option value="Room22">Room 22</option>
										    <option value="Room23">Room 23</option>
										    <option value="Room24">Room 24</option>
										    <option value="Room25">Room 25</option>
										    <option value="Room26">Room 26</option>
										    <option value="Room27">Room 27</option>
										    <option value="Room28">Room 28</option>
										    <option value="Room29">Room 29</option>
										    <option value="Room30">Room 30</option>
										    <option value="Room31">Room 31</option>
										    <option value="Room32">Room 32</option>
										    <option value="Room33">Room 33</option>
										    <option value="Room34">Room 34</option>
										    <option value="Room35">Room 35</option>
										    <option value="Room36">Room 36</option>
										    <option value="Room37">Room 37</option>
										    <option value="Room38">Room 38</option>
										    <option value="Room39">Room 39</option>
										    <option value="Room40">Room 40</option>
										</select>
										<select class="selct-type" id="Room3" style="display: none;">
										    <option value="Room41">Room 41</option>
										    <option value="Room42">Room 42</option>
										    <option value="Room43">Room 43</option>
										    <option value="Room44">Room 44</option>
										    <option value="Room45">Room 45</option>
										    <option value="Room46">Room 46</option>
										    <option value="Room47">Room 47</option>
										    <option value="Room48">Room 48</option>
										    <option value="Room49">Room 49</option>
										    <option value="Room50">Room 50</option>
										    <option value="Room51">Room 51</option>
										    <option value="Room52">Room 52</option>
										    <option value="Room53">Room 53</option>
										    <option value="Room54">Room 54</option>
										    <option value="Room55">Room 55</option>
										    <option value="Room56">Room 56</option>
										    <option value="Room57">Room 57</option>
										    <option value="Room58">Room 58</option>
										    <option value="Room59">Room 59</option>
										    <option value="Room60">Room 60</option>
										</select>
										<select class="selct-type" id="Room4" style="display: none;">
										    <option value="Room61">Room 61</option>
										    <option value="Room62">Room 62</option>
										    <option value="Room63">Room 63</option>
										    <option value="Room64">Room 64</option>
										    <option value="Room65">Room 65</option>
										    <option value="Room66">Room 66</option>
										    <option value="Room67">Room 67</option>
										    <option value="Room68">Room 68</option>
										    <option value="Room69">Room 69</option>
										    <option value="Room70">Room 70</option>
										    <option value="Room71">Room 71</option>
										    <option value="Room72">Room 72</option>
										    <option value="Room73">Room 73</option>
										    <option value="Room74">Room 74</option>
										    <option value="Room75">Room 75</option>
										    <option value="Room76">Room 76</option>
										    <option value="Room77">Room 77</option>
										    <option value="Room78">Room 78</option>
										    <option value="Room79">Room 79</option>
										    <option value="Room80">Room 80</option>
										</select>
										<select class="selct-type" id="Room5" style="display: none;">
										    <option value="Room81">Room 81</option>
										    <option value="Room82">Room 82</option>
										    <option value="Room83">Room 83</option>
										    <option value="Room84">Room 84</option>
										    <option value="Room85">Room 85</option>
										    <option value="Room86">Room 86</option>
										    <option value="Room87">Room 87</option>
										    <option value="Room88">Room 88</option>
										    <option value="Room89">Room 89</option>
										    <option value="Room90">Room 90</option>
										    <option value="Room91">Room 91</option>
										    <option value="Room92">Room 92</option>
										    <option value="Room93">Room 93</option>
										    <option value="Room94">Room 94</option>
										    <option value="Room95">Room 95</option>
										    <option value="Room96">Room 96</option>
										    <option value="Room97">Room 97</option>
										    <option value="Room98">Room 98</option>
										    <option value="Room99">Room 99</option>
										    <option value="Room100">Room 100</option>
										</select>
									</td>
								</tr>
								<tr class="text-center pt-5">
									<td colspan="2" class="pt-5">
										<a href="Change_Room_Approved_Report.php"><button class="btn btn-colo box-sh mx-1 w-1 text-center">Change</button></a>
										<a href="../student.php"><button class="btn btn-colo box-sh mx-1 w-1">Exit</button></a>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
			$("#Building").change(function() {
				var conceptName = $('#Building').find(":selected").val();
				if(conceptName == "Building1"){
					$("#Room1").show();
					$("#Room2").hide();
					$("#Room3").hide();
					$("#Room4").hide();
					$("#Room5").hide();
				}
				if(conceptName == "Building2"){
					$("#Room1").hide();
					$("#Room2").show();
					$("#Room3").hide();
					$("#Room4").hide();
					$("#Room5").hide();
				}
				if(conceptName == "Building3"){
					$("#Room1").hide();
					$("#Room2").hide();
					$("#Room3").show();
					$("#Room4").hide();
					$("#Room5").hide();
				}
				if(conceptName == "Building4"){
					$("#Room1").hide();
					$("#Room2").hide();
					$("#Room3").hide();
					$("#Room4").show();
					$("#Room5").hide();
				}
				if(conceptName == "Building5"){
					$("#Room1").hide();
					$("#Room2").hide();
					$("#Room3").hide();
					$("#Room4").hide();
					$("#Room5").show();
				}
			});
		</script>
		<?php
	      include 'include/footer.php';
	  	?>