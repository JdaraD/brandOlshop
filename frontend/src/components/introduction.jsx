import { Link } from "react-router-dom";

function Introduction() {
  return (
    <ul>
        <li>Welcome to Our Online Shop!</li>
        <li>
            <Link to="/">home</Link>
        </li>
        <li>
            <Link to="/categories">categories</Link>
        </li>
    </ul>

  );
}
export default Introduction;