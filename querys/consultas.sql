select n.id, n.titulo, p.nombre, c.nombre, u.email, e.nombre, n.fecha_up
from novedades n 
inner join peticiones p
on n.id_peticiones = p.id
inner join categorias c
on n.id_categorias = c.id
inner join usuarios u
on n.id_usuario = u.id
inner join estado_novedades e
on n.id_estado_novedad = e.id
order by n.id