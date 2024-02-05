import React from 'react'; 
export default function ProductList({title , price , description , image}){ 
  return ( 
      <div style={{display: "flex" , flexDirection: "column",}}> 
          <div style={{width: "100%"}}> 
              <img src={image} alt={"商品圖片"} /> 
          </div> 
          <div style={{width: "100%"}}> 
              <p>{title}</p> 
              <p style={{color:"red" ,fontWeight:"bolder"}}>{price}</p> 
              <p>{description}</p> 
          </div> 
      </div> 
  ); 
}