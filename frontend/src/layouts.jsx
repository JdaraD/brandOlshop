import { Outlet } from 'react-router-dom'
import Introduction from './components/introduction'


function Layouts() {
  return (
    <>
    <Introduction />
    <main className="pt-8">
      <Outlet />
    </main>
    </>
  );
}

export default Layouts;