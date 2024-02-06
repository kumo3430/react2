import react from "react"; 
import ProductList from '../Components/ProductList'; 
export default function Home({product}){
  console.log(product);
  return( 
    <div> 
        <div className="flex flex-wrap"> 
            { 
                product.map( value => { 
                    return <ProductList key={value.product_title} title={value.product_title} price={value.product_price} description={value.product_description} image={value.product_image} /> 
                }) 
            } 
        </div> 
    </div> 
  ); 
}