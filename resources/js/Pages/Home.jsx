import react from "react"; 
import ProductList from '../Components/ProductList'; 
export default function Home({product}){
  return(
      <div>
          <div className="flex flex-wrap">
              {
                  product.map( value => {
                      return <ProductList key={value.name} title={value.name} price={1000} description={value.description} image={"https://pic.616pic.com/ys_img/00/44/76/yYdFMozXJd.jpg"} />
                  })
              }
          </div>
      </div>
  );
}