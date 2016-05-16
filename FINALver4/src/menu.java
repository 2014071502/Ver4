

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class menu
 */
@WebServlet("/menu")
public class menu extends HttpServlet {
	private static final long serialVersionUID = 1L;
	Applicant person;
	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		createApplicant(request,response);
		String y = person.getRestaurant();
		out.println("<html>");
		out.println("<head><title>");
		out.println("</title>");
		out.println("</head>");
		out.println("<body>");
		out.print("<form method = 'post' action = 'reserve'>");
		if("Tori Box".equals(y)){
		
		out.println("<img src = 'tb.jpeg'><br>");
		out.println("located in iTower Bldg., 939 Padre Noval St., Sampaloc Manila, Philippines<br>");
		}else if("Dimsum Treats".equals(y)){
		out.println("<img src = 'dt.jpg'><br>");
		out.println("located in Dapitan St. (Between Juaning & Santander), Manila, City of Manila, Philippines");
		}else{
		out.println("<img src = 'pb.jpg'><br>");
		out.println("located inside ust carpark");
		}
		out.println("<p>Number of seats to be reserved: <input type = 'text' name = 'seat'<br></p>");
		out.println("<p><input type='submit' value='reserve'</p>");
		out.print("</form>");
		out.print("<form method ='post' action='thrift'");
		out.println("<p><input type='submit' value='back'></p>");
		out.print("</body>");
		out.print("</body>");
		out.print("</html>");
	}
	private void createApplicant(HttpServletRequest request, HttpServletResponse response) {
		person = new Applicant();
		person.setRestaurant(request.getParameter("restaurant"));
	}
}
