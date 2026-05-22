import { Link } from "react-router-dom";
import { FaSearch, FaShoppingBag, FaHeart, FaUser } from "react-icons/fa";
import { use } from "react";
import { useEffect, useState } from "react";

function Home() {
  const [products, setProducts] = useState(null);

  useEffect(() => {
    fetch("http://localhost:8000/api/products")
      .then((response) => response.json())
      .then((data) => setProducts(data))
      .catch((err) => console.log(err));
  }, []);

  if (!products) return <p>Loading...</p>;

  return (
    <div className="bg-white min-h-screen">
      {/* Hero Section */}
      <section className="relative h-[90vh]">
        <img
          src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1600&auto=format&fit=crop"
          alt="hero"
          className="w-full h-full object-cover"
        />

        <div className="absolute inset-0 bg-black/40 flex items-center">
          <div className="text-white px-8 md:px-20 max-w-2xl">
            <p className="uppercase tracking-[5px] mb-3">New Collection</p>

            <h1 className="text-5xl md:text-7xl font-black leading-tight mb-5">
              JUST DO IT.
            </h1>

            <p className="text-lg mb-8 text-gray-200">
              Discover the newest Nike collection with premium comfort and
              modern style.
            </p>

            <button className="bg-white text-black px-7 py-3 rounded-full font-semibold hover:bg-gray-200 transition">
              Shop Now
            </button>
          </div>
        </div>
      </section>

      {/* Featured Section */}
      <section className="max-w-7xl mx-auto px-6 py-20">
        <div className="flex justify-between items-center mb-10">
          <h2 className="text-3xl font-bold">Featured Products</h2>

          <button className="border px-5 py-2 rounded-full hover:bg-black hover:text-white transition">
            View All
          </button>
        </div>

        {/* Product Grid */}
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          {products?.data?.map((product) => (
            <div key={product.id} className="group">
              {/* Image */}
              <div className="overflow-hidden rounded-2xl bg-gray-100">
                <img
                  src={product.image}
                  alt={product.name}
                  className="h-80 w-full object-contain group-hover:scale-110 transition duration-500"
                />
              </div>

              {/* Content */}
              <div className="mt-4">
                <h3 className="font-semibold text-lg">{product.name}</h3>

                <p className="text-gray-500 text-sm">{product.description}</p>

                <p className="mt-2 font-bold">
                  Rp. {Number(product.price).toLocaleString()}
                </p>
              </div>
            </div>
          ))}
        </div>
      </section>

      {/* Banner */}
      <section className="bg-black text-white py-20 px-6">
        <div className="max-w-5xl mx-auto text-center">
          <h2 className="text-4xl md:text-6xl font-black mb-6">
            MOVE WITHOUT LIMITS
          </h2>

          <p className="text-gray-300 max-w-2xl mx-auto mb-8">
            Performance meets lifestyle. Explore Nike’s newest innovation
            designed for athletes and everyday wear.
          </p>

          <button className="bg-white text-black px-8 py-3 rounded-full font-semibold hover:bg-gray-200 transition">
            Explore Collection
          </button>
        </div>
      </section>

      {/* Footer */}
    </div>
  );
}

export default Home;
