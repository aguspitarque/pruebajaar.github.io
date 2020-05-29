select * from Operacion where numero = 168800

select * from Comprobante where Tipo = 'RC' and OperacionId = 219196

select * from ComprobanteApertura where Id = 5252141


begin tran
--Realizar los cambios para cancelar el credito 
update ComprobanteApertura 
	set Capital = 833.35, Interes = 616.65,Componente2 = 120, Punitorio = 121
	where Id = 5252141 and Cuota = 6


--insertar regitro con el estado que se quiera 
insert into OperacionCreditoEstado (OperacionId,Fecha,EstadoId,SubEstadoId,Responsable,EsActual,Comentarios)
	values (219196,'2019-08-03',99,991,'Admin',1,'')


-- desmarcar el viejo 
update OperacionCreditoEstado
	set EsActual = 0
	where Id = 894380
-- agregar el estado en OperacionCredito
update OperacionCredito
	set EstadoId = 99
	where OperacionId = 219196 		


commit 