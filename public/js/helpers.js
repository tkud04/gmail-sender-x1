let leads = [], counter = 0;

const showElem = (name) => {
	let names = [];
	
	if(Array.isArray(name)){
	  names = name;
	}
	else{
		names.push(name);
	}
	
	for(let i = 0; i < names.length; i++){
		$(names[i]).fadeIn();
	}
}

const hideElem = (name) => {
	let names = [];
	
	if(Array.isArray(name)){
	  names = name;
	}
	else{
		names.push(name);
	}
	
	for(let i = 0; i < names.length; i++){
		$(names[i]).hide();
	}
	
}

const getSenders = async () => {
	const req = new Request('http://x1.infinityfreeapp.com/api/senders.php?type=senders',{
		method: 'GET',
	})

	const rawResponse = await fetch(req)
	console.log({rawResponse})

	if(rawResponse.status === 200){
		let responseJSON = await rawResponse.json()
		console.log({responseJSON})

		
	}
}




const bomb = async (dt) => {
	    let em = leads[counter];

		let fd = new FormData()
		fd.append('xf',dt.xf)
		fd.append('to',em)
		fd.append('sn',dt.sname)
		fd.append('se',dt.replyTo)
		fd.append('subject',dt.subject)
		fd.append('msg',dt.msg)

		let req = new Request('api/bomb',{
			method: 'POST',
			body: fd
		})

		let rawResponse = await fetch(req)
		if(rawResponse.status === 200){
			console.log({rawResponse})

			let responseJSON = await rawResponse.json()
			console.log({responseJSON})

			setTimeout(function(){
				++counter;
				let ct = `
				<tr>
				  <td>${em}</td>
				  <td>
				   ${responseJSON?.status === 'ok' ? '<p class="text-primary">SENT</p>' : '<p class="text-danger">FAILED</p>'}
				  </td>
				</tr>`;
				$('#result-body').append(ct);
   
				   if(counter < leads.length){
					  bomb(dt);
				   }
				   else{	  
					  //$('#result-box').hide();
					  console.log("finished sending");
					  alert('Done!')
					  window.location.replace('/')
				   }				  
			   },4000);
		}


		
	
   /*
	console.log(`Sending for ${em}`);	
	
	//fetch request
	testBomb(payload);
		   
		   
			*/
}

