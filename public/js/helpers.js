const login = async (fd) => {
    const url = 'api/signin'
    const response =  await fetch(url, {
        method: "POST",
        body: fd
      })
    if(response.status === 200){
      const responseJSON = await response.json()
      return responseJSON
    }
    else{
     return {status: 'error', message: `Request failed with status code: ${response.status}`}
    }
   
}