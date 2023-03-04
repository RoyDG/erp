<script>

 function calculateSalary() {
            var basicSalary = parseFloat(document.getElementById("basic-salary").value); 
            var houseRent = basicSalary * 0.5;
            var medicalAllowance = basicSalary * 0.1;
            var convenience = basicSalary * 0.15;
            var grossSalary = basicSalary + houseRent + medicalAllowance + convenience;
            var tax;
	 
	        var genders = document.getElementById('gender').value;
	 
           
	 		
	 		var male_yearly_gross = basicSalary*14;
	 		var female_yearly_gro = gasicSalary*14;
	 
	 		if (genders=='Male' && male_yearly_gross>=300000){
				if (grossSalary < 80000) {
                tax = male_yearly_gromale_yearly_gro * 0.05;
				} else if (grossSalary < 150000) {
					tax = male_yearly_gro * 0.075;
				} else {
					tax = grossSalary * 0.1;
				}
			}
	 			 
			else if (female_yearly_gross>=350000){
				if (grossSalary < 80000) {
				tax = grossSalary * 0.05;
				} else if (grossSalary < 150000) {
					tax = grossSalary * 0.075;
				} else {
					tax = grossSalary * 0.1;
				}
			}
			else{
				tax = 0;
			}

			var totalPayable = grossSalary - (tax / 12);
			document.getElementById("house-rent").value = Math.round(houseRent);
			document.getElementById("medical-allowance").value = Math.round(medicalAllowance);
			document.getElementById("convenience").value = Math.round(convenience);
			document.getElementById("gross-salary").value = Math.round(grossSalary);
			document.getElementById("tax").value = Math.round(tax);
			document.getElementById("total-payable").value = Math.round(totalPayable);
            
            /*
            document.getElementById("house-rent").value = houseRent.toFixed(2);
            document.getElementById("medical-allowance").value = medicalAllowance.toFixed(2);
            document.getElementById("convenience").value = convenience.toFixed(2);
            document.getElementById("gross-salary").value = grossSalary.toFixed(2);
            document.getElementById("tax").value = tax.toFixed(2);
            document.getElementById("total-payable").value = totalPayable.toFixed(2);*/        
			}

</script>


