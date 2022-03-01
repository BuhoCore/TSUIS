

<%@ page contentType="text/html;charset=UTF-8" language="java" %>

<%@ page language="java" contentType="text/html; charset=UTF-8"
         pageEncoding="UTF-8"%>

<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/fmt" prefix="fmt"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/functions" prefix="fn"%>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>

<c:set var="ctx" value="${pageContext['request'].contextPath}" />
<html>

<head>
    <title>Solicitud</title>
    <link href="<c:url value="/WEB-INF/css/style.css"/>" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="hello.js"></script>
    <title>Spring boot +  Web Application</title>
</head>


<body>

Hi : ${name}
<br />
<c:choose>
    <c:when test="${not empty solicitud}">
        <h1>Lista solicitud orden </h1>
        <table border="1"><tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>
            <c:forEach var="item" items="${solicitud}">
                <tr>
                    <td><c:out value="${item.id}" /></td>
                    <td><c:out value="${item.name}" /></td>

                    <td>
                        <table border="1"><tr><th>ID</th><th>Nombre</th><th>existencia</th><th>existencia Maxima</th><th>Consumo</th><th>Pedido</th></tr>
                            <c:forEach var="nodo" items="${item.items}">
                                <tr>
                                    <td><c:out value="${nodo.id}" /></td>
                                    <td><c:out value="${nodo.name}" /></td>
                                    <td><c:out value="${nodo.existenciaMinima}" /></td>
                                    <td><c:out value="${nodo.existenciaMaxima}" /></td>
                                    <td><c:out value="${nodo.consumo}" /></td>
                                    <td><c:out value="${nodo.pedidoProveedor}" /></td>
                                </tr>
                            </c:forEach>
                        </table>
                    </td>
                    <td><a href="http://localhost:8080/web_jsp_war/Solicitud">"Ver Solicitudes "</a></td>
                </tr>
            </c:forEach>
        </table>
    </c:when>
    <c:when test="${not empty solicitud}">
        Here is your info <br>
        <table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Description</th></tr>
            <c:forEach var="item" items="${solicitud}">
                <tr>
                    <td><c:out value="${item.id}" /></td>
                    <td><c:out value="${item.name}" /></td>
                </tr>
            </c:forEach>
        </table>
    </c:when>
    <c:otherwise></c:otherwise>
</c:choose>


</body>


</html>
