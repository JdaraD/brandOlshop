import { BrowserRouter, Routes, Route } from "react-router-dom";
import "./App.css";
import Layouts from "./layouts";
import Home from "./components/pages/home";
import Categories from "./components/pages/categories";
import MenPage from "./components/pages/menPage";
import WomenPage from "./components/pages/womenPage";
import KidsPage from "./components/pages/kidsPage";

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Layouts />}>
          <Route index element={<Home />} />
          <Route path="categories" element={<Categories />} />
          <Route path="MenPage" element={<MenPage />} />
          <Route path="WomenPage" element={<WomenPage />} />
          <Route path="KidsPage" element={<KidsPage />} />
        </Route>
      </Routes>
    </BrowserRouter>
  );
}

export default App;
