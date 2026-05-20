import { Link } from "react-router-dom";
import { FaSearch, FaShoppingBag, FaHeart, FaUser } from "react-icons/fa";

function kidsPage() {
  const categories = [
    {
      title: "School Style",
      image:
        "https://images.unsplash.com/photo-1519238263530-99bdd11df2ea?q=80&w=1200&auto=format&fit=crop",
    },
    {
      title: "Play Time",
      image:
        "https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?q=80&w=1200&auto=format&fit=crop",
    },
    {
      title: "Sport Kids",
      image:
        "https://images.unsplash.com/photo-1517841905240-472988babdf9?q=80&w=1200&auto=format&fit=crop",
    },
  ];

  const products = [
    {
      id: 1,
      name: "Nike Air Kids",
      category: "Kids Shoes",
      price: "Rp 1.299.000",
      image:
        "https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1200&auto=format&fit=crop",
    },
    {
      id: 2,
      name: "Nike Junior Run",
      category: "Running Shoes",
      price: "Rp 1.499.000",
      image:
        "https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?q=80&w=1200&auto=format&fit=crop",
    },
    {
      id: 3,
      name: "Nike Play Set",
      category: "Kids Outfit",
      price: "Rp 999.000",
      image:
        "https://images.unsplash.com/photo-1519238263530-99bdd11df2ea?q=80&w=1200&auto=format&fit=crop",
    },
    {
      id: 4,
      name: "Nike Kids Hoodie",
      category: "Lifestyle",
      price: "Rp 799.000",
      image:
        "https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?q=80&w=1200&auto=format&fit=crop",
    },
  ];

  return (
    <div className="bg-white min-h-screen">
      {/* Hero */}
      <section className="relative h-[90vh]">
        <img
          src="https://images.unsplash.com/photo-1517841905240-472988babdf9?q=80&w=1800&auto=format&fit=crop"
          alt="kids hero"
          className="w-full h-full object-cover"
        />

        <div className="absolute inset-0 bg-black/40 flex items-center">
          <div className="px-8 md:px-20 text-white max-w-3xl">
            <p className="uppercase tracking-[6px] mb-4">Nike Kids</p>

            <h1 className="text-5xl md:text-7xl font-black leading-tight mb-6">
              PLAY BIG EVERY DAY
            </h1>

            <p className="text-lg text-gray-200 mb-8">
              Comfortable, colorful, and made for movement. Discover the latest
              Nike collections for kids.
            </p>

            <div className="flex gap-4">
              <button className="bg-white text-black px-7 py-3 rounded-full font-semibold hover:bg-gray-200 transition">
                Shop Kids
              </button>

              <button className="border border-white px-7 py-3 rounded-full font-semibold hover:bg-white hover:text-black transition">
                Explore More
              </button>
            </div>
          </div>
        </div>
      </section>

      {/* Categories */}
      <section className="max-w-7xl mx-auto px-6 py-20">
        <h2 className="text-4xl font-bold mb-10">Shop By Category</h2>

        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {categories.map((item, index) => (
            <div
              key={index}
              className="relative overflow-hidden rounded-3xl group h-125"
            >
              <img
                src={item.image}
                alt={item.title}
                className="w-full h-full object-cover group-hover:scale-110 transition duration-500"
              />

              <div className="absolute inset-0 bg-black/30 flex items-end p-8">
                <div>
                  <h3 className="text-white text-3xl font-bold mb-4">
                    {item.title}
                  </h3>

                  <button className="bg-white text-black px-6 py-3 rounded-full font-semibold hover:bg-gray-200 transition">
                    Shop
                  </button>
                </div>
              </div>
            </div>
          ))}
        </div>
      </section>

      {/* Products */}
      <section className="max-w-7xl mx-auto px-6 pb-20">
        <div className="flex justify-between items-center mb-10">
          <h2 className="text-4xl font-bold">Trending For Kids</h2>

          <button className="border px-5 py-2 rounded-full hover:bg-black hover:text-white transition">
            View All
          </button>
        </div>

        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          {products.map((product) => (
            <div key={product.id} className="group">
              <div className="bg-gray-100 rounded-3xl overflow-hidden">
                <img
                  src={product.image}
                  alt={product.name}
                  className="w-full h-87.5 object-cover group-hover:scale-110 transition duration-500"
                />
              </div>

              <div className="mt-4">
                <h3 className="font-semibold text-lg">{product.name}</h3>

                <p className="text-gray-500 text-sm">{product.category}</p>

                <p className="font-bold mt-2">{product.price}</p>
              </div>
            </div>
          ))}
        </div>
      </section>

      {/* Promo Banner */}
      <section className="relative h-[70vh]">
        <img
          src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?q=80&w=1800&auto=format&fit=crop"
          alt="banner"
          className="w-full h-full object-cover"
        />

        <div className="absolute inset-0 bg-black/50 flex items-center justify-center text-center">
          <div className="text-white px-6">
            <p className="uppercase tracking-[4px] mb-4">
              Nike Kids Collection
            </p>

            <h2 className="text-5xl md:text-7xl font-black mb-6">
              MOVE • PLAY • GROW
            </h2>

            <button className="bg-white text-black px-8 py-3 rounded-full font-semibold hover:bg-gray-200 transition">
              Discover Collection
            </button>
          </div>
        </div>
      </section>
    </div>
  );
}

export default kidsPage;
