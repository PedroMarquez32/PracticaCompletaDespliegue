import { useEffect, useState } from 'react';
import './App.css'

function App() {
const [message, setMessage] = useState('');
useEffect(() => {
fetch('/api/PJML')
.then((res) => res.json())
.then((data) => setMessage(data.frasePJML
));
}, []);
return (
<div>
<h1>Frontend en React de Pedro Javier Marquez Lizana</h1>
<p>Esta aplicación se conecta al backend de Symfony pidiéndole una respuesta</p>
<p>respuesta del Backend: {message || 'Cargando información...'}</p>
</div>
);
}
export default App;