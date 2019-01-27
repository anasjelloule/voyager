import acceuil from './pages/acceuil'
import about from './pages/about'
import blog from './pages/blog'
import singlepost from './pages/singlepost'
import anas from './pages/anas'
import page404 from './pages/Page404'

const routes = [
    { path: '/', component: acceuil, name: 'acceuil' },
    { path: '/about', component: about, name: 'about' },
    { path: '/blog', component: blog, name: 'blog' },
    { path: '/blogs/:slug', component: singlepost, name: 'singlepost', props: true },
    { path: '/anas', component: anas, name: 'anas' },
    { path: '/404', component: page404, name: '404' },
    { path: '*', redirect: '/404' },

]
export default routes;