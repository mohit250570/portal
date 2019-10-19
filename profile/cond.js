function populate(s3,s2){
	var s1 = document.getElementById(s3);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "one"){
		var optionArray = ["|","CSE|CSE","IT|IT","EN|EN","EC|EC","ME|ME","CE|CE","EI|EI"];
	} else if(s1.value == "two"){
		var optionArray = ["|","CSE|CSE","IT|IT","EN|EN","EC|EC","ME|ME","CE|CE","EI|EI"];
	} else if(s1.value == "three"){
		var optionArray = ["|","CSE|CSE","IT|IT","EN|EN","EC|EC","ME|ME","CE|CE","EI|EI"];
	}else if(s1.value == "four"){
		var optionArray = ["|","CSE|CSE","IT|IT","EN|EN","EC|EC","ME|ME","CE|CE","EI|EI"];
	}else if(s1.value == "five"){
		var optionArray = ["|","CSE|CSE","IT|IT","EN|EN","EC|EC","ME|ME","CE|CE","EI|EI"];
	}else if(s1.value == "six"){
		var optionArray = ["|","CSE|CSE","IT|IT","EN|EN","EC|EC","ME|ME","CE|CE","EI|EI"];
	}else if(s1.value == "seven"){
		var optionArray = ["|","CSE|CSE","IT|IT","EN|EN","EC|EC","ME|ME","CE|CE","EI|EI"];
	}else if(s1.value == "eight"){
		var optionArray = ["|","CSE|CSE","IT|IT","EN|EN","EC|EC","ME|ME","CE|CE","EI|EI"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}

function populate1(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	var s3= document.getElementById("sem");
	s2.innerHTML = "";
	if(s1.value == "CSE" && s3.value=="one"){
		var optionArray = ["|","PC|PC","MATH|MATH","C|C"];
	} else if(s1.value == "IT" && s3.value=="one"){
		var optionArray = ["|","PC|PC","MATH|MATH","C|C"];
	} else if(s1.value == "EN" && s3.value=="one"){
		var optionArray = ["|","PC|PC","MECH|MECH"];
	}else if(s1.value == "EC" && s3.value=="f"){
		var optionArray = ["|","PC|PC","MECH|MECH"];
	}else if(s1.value == "ME" && s3.value=="one"){
		var optionArray = ["|","PC|PC","MECH|MECH"];
	}else if(s1.value == "CE" && s3.value=="one"){
		var optionArray = ["|","PC|PC","MECH|MECH"];
	}else if(s1.value == "EI" && s3.value=="one"){
		var optionArray = ["|","PC|PC","MATH|MATH","C|C"];;
	}

	else if(s1.value == "CSE" && s3.value=="two"){
		var optionArray = ["|","DLD|DLD","CO|CO"];
	}else if(s1.value == "IT" && s3.value=="two"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "EN" && s3.value=="two"){
		var optionArray = ["|","CONTROL|CONTROL"];
	}else if(s1.value == "EC" && s3.value=="two"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "ME" && s3.value=="two"){
		var optionArray = ["|","THERMO|THERMO"];
	}else if(s1.value == "CE" && s3.value=="two"){
		var optionArray = ["|","MATERIAL|MATERIAL"];
	}else if(s1.value == "EI" && s3.value=="two"){
		var optionArray = ["|","DLD|DLD"];
	}

	else if(s1.value == "CSE" && s3.value=="three"){
		var optionArray = ["|","CG|CG","DW|DW"];
	}else if(s1.value == "IT" && s3.value=="three"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "EN" && s3.value=="three"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "EC" && s3.value=="three"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "ME" && s3.value=="three"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "CE" && s3.value=="three"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "EI" && s3.value=="three"){
		var optionArray = ["|","SOFT|SOFT"];
	}
	
	else if(s1.value == "CSE" && s3.value=="three"){
		var optionArray = ["|","CG|CG","DW|DW"];
	}else if(s1.value == "IT" && s3.value=="three"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "EN" && s3.value=="three"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "EC" && s3.value=="three"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "ME" && s3.value=="three"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "CE" && s3.value=="three"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "EI" && s3.value=="three"){
		var optionArray = ["|","SOFT|SOFT"];
	}

	else if(s1.value == "CSE" && s3.value=="four"){
		var optionArray = ["|","CG|CG","DW|DW"];
	}else if(s1.value == "IT" && s3.value=="four"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "EN" && s3.value=="four"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "EC" && s3.value=="four"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "ME" && s3.value=="four"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "CE" && s3.value=="four"){
		var optionArray = ["|","SOFT|SOFT"];
	}else if(s1.value == "EI" && s3.value=="four"){
		var optionArray = ["|","SOFT|SOFT"];
	}

	else if(s1.value == "CSE" && s3.value=="five"){
		var optionArray = ["|","FIVE_CS|FIVE_CS"];
	}else if(s1.value == "IT" && s3.value=="five"){
		var optionArray = ["|","FIVE_IT|FIVE_IT"];
	}else if(s1.value == "EN" && s3.value=="five"){
		var optionArray = ["|","FIVE_EN|FIVE_EN"];
	}else if(s1.value == "EC" && s3.value=="five"){
		var optionArray = ["|","FIVE_EC|FIVE_EC"];
	}else if(s1.value == "ME" && s3.value=="five"){
		var optionArray = ["|","FIVE_ME|FIVE_ME"];
	}else if(s1.value == "CE" && s3.value=="five"){
		var optionArray = ["|","FIVE_CE|FIVE_CE"];
	}else if(s1.value == "EI" && s3.value=="five"){
		var optionArray = ["|","FIVE_EI|FIVE_EI"];
	}

	else if(s1.value == "CSE" && s3.value=="six"){
		var optionArray = ["|","COMPUTER_NETWORK|COMPUTER_NETWORK","COMPUTER_GRAPHICS|COMPUTER_GRAPHICS","DATAWARE_DATAMINING|DATAWARE_DATAMINING","SOCIOLOY|SOCIOLOGY","INDUSTRIAL_MANAGEMENT|INDUSTRIAL_MANAGEMENT","COMPILER|COMPILER"];
	}else if(s1.value == "IT" && s3.value=="six"){
		var optionArray = ["|","SIX_IT|SIX_IT"];
	}else if(s1.value == "EN" && s3.value=="six"){
		var optionArray = ["|","POWER_ELECTRONICS|POWER_ELECTRONICS","MICRO_PROCESSOR|MICRO_PROCESSOR","SPECIAL_ELECTRICAL_MACHINE|SPECIAL_ELECTRICAL_MACHINE","POWER_SYSTEM_ANALYSIS|POWER_SYSTEM_ANALYSIS","CYBER_SECURITY|CYBER_SECURITY","INDUSTRIAL_MANAGEMENT|INDUSTRIAL_MANAGEMENT"];
	}else if(s1.value == "EC" && s3.value=="six"){
		var optionArray = ["|","cyber|cyber"];
	}else if(s1.value == "ME" && s3.value=="six"){
		var optionArray = ["|","SIX_ME|SIX_ME"];
	}else if(s1.value == "CE" && s3.value=="six"){
		var optionArray = ["|","SIX_CE|SIX_CE"];
	}else if(s1.value == "EI" && s3.value=="six"){
		var optionArray = ["|","SIX_EI|SIX_EI"];
	}else if(s1.value == "CSE" && s3.value=="seven"){
		var optionArray = ["|","SEVEN_CS|SEVEN_CS"];
	}else if(s1.value == "IT" && s3.value=="seven"){
		var optionArray = ["|","SEVEN_IT|SEVEN_IT"];
	}else if(s1.value == "EN" && s3.value=="seven"){
		var optionArray = ["|","SEVEN_EN|SEVEN_EN"];
	}else if(s1.value == "EC" && s3.value=="seven"){
		var optionArray = ["|","SEVEN_EC|SEVEN_EC"];
	}else if(s1.value == "ME" && s3.value=="seven"){
		var optionArray = ["|","SEVEN_ME|SEVEN_ME"];
	}else if(s1.value == "CE" && s3.value=="seven"){
		var optionArray = ["|","SEVEN_CE|SEVEN_CE"];
	}else if(s1.value == "EI" && s3.value=="seven"){
		var optionArray = ["|","SEVEN_EI|SEVEN_EI"];
	}else if(s1.value == "CSE" && s3.value=="eight"){
		var optionArray = ["|","EIGHT_CS|EIGHT_CS"];
	}else if(s1.value == "IT" && s3.value=="eight"){
		var optionArray = ["|","EIGHT_IT|EIGHT_IT"];
	}else if(s1.value == "EN" && s3.value=="eight"){
		var optionArray = ["|","EIGHT_EN|EIGHT_EN"];
	}else if(s1.value == "EC" && s3.value=="eight"){
		var optionArray = ["|","EIGHT_EC|EIGHT_EC"];
	}else if(s1.value == "ME" && s3.value=="eight"){
		var optionArray = ["|","EIGHT_ME|EIGHT_ME"];
	}else if(s1.value == "CE" && s3.value=="eight"){
		var optionArray = ["|","EIGHT_CE|EIGHT_CE"];
	}else if(s1.value == "EI" && s3.value=="eight"){
		var optionArray = ["|","EIGHT_EI|EIGHT_EI"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}

