import React from 'react';
import { Inertia } from '@inertiajs/inertia';

export default function Dashboard() {
  const handleLogout = () => {
    Inertia.post('/logout');
  };

  return (
    <div style={{ maxWidth: '600px', margin: 'auto', paddingTop: '50px' }}>
      <h1>Bienvenido al Dashboard</h1>
      <button onClick={handleLogout}>Cerrar sesión</button>
    </div>
  );
}
