fetch("data.txt")
.then(function(response){
   return response.json();
})
.then(function(products){
   let placeholder = document.querySelector("#data-output");
   let out = "";
   for(let product of products){
      out += `
         <tr>
            <td>${product.name}</td>
            <td>${product.email}</td>
            <td>${product.website}</td>
            <td>${product.comment}</td>
            <td>${product.gender}</td>
            <td>                                   
               <a href='edit.php?index='".$index."' class='btn btn-success btn-sm'>Edit</a>
               <a href='delete.php?index='".${product.name}."' class="delete">Delete</a>
            </td>
         </tr>
      `;
   }

   placeholder.innerHTML = out;
});