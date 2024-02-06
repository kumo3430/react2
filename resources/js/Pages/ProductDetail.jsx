import React, { useState } from 'react';
export default function Home({product}){ 
  console.log(product);
  const [amount , setAmount] = useState(1); 
  function amountChange(e) 
  { 
      if(!isNaN(Math.round(e.target.value))) 
          setAmount(Math.round(e.target.value)); 
  } 
  return( 
      <div className="flex justify-center"> 
          <div className="pt-8 flex-col max-w-6xl"> 
              <div className="max-w-6xl flex justify-center"> 
                  <div className="w-6/12"> 
                      <img src="https://pic.616pic.com/ys_img/00/44/76/yYdFMozXJd.jpg" alt="商品圖片" /> 
                  </div> 
                  <div className="w-6/12 flex flex-col justify-around pl-3"> 
                      <p>商品名稱：{product.product_title}</p> 
                      <p className="font-bold text-lg text-red-600">價格：{product.product_price}</p> 
                  </div> 
              </div> 
              <div className="max-w-6xl pt-2"> 
                  <h3>商品敘述</h3> 
                  <div> 
                      <p>{product.product_description}</p> 
                  </div> 
              </div> 
              <div className="pt-2 max-w-6xl"> 
                  <label>數量：</label> 
                  <input type="number" value={amount} onChange={ amountChange }/> 
                  <p className="text-red-600">總金額：{12000 * amount}</p> 
              </div> 
              <div className="pt-2 max-w-6xl text-center"> 
                <button className="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-indigo-50 hover:text-gray-700             focus:outline-none transition ease-in-out duration-150" > 
                    結帳去 
                </button>
              </div>  
          </div> 
      </div> 
  ); 
}
